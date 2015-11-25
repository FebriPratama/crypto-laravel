<?php

use OAuth\OAuth2\Token\StdOAuth2Token;
use OAuth\OAuth1\Token\StdOAuth1Token;

define('API', '5cc25d153168c441bb828d57526692d9');
define('SESI',Auth::user()->check());
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{

		return View::make('login');

	}

	public function member(){

		if(SESI)
			return View::make();
		
		return Redirect::to('/')->with('error','You have not logged in');
	}

	public function testCon(){
		
		$input = array(

			'm_user_id' => Auth::user()->get()->user_id,
			'm_text' => Kripto::encode(strtoupper(Input::get('pesan')))

			);

		$m = Tbl_message::create($input);

		$data = array(

			'id' => Auth::user()->get()->user_id, 
			'name' => Auth::user()->get()->user_fullname, 
			'message' => Input::get('pesan')

			);

		Event::fire(UpdateScoreEventHandler::EVENT, $data);

		$mes = strtolower(Kripto::decode($m->m_text));

		return Response::json(array('m_text' => str_replace(array(':'), ' ', $mes) ));
	}

    public function modal($term,$tag,$action = null)
    {

    	try{

	    	if(Auth::user()->check())
	    	{

		    	switch ($term) {
		    		case 'kripto':

		    			switch ($action) {
		    				case 'vigenere':
					    			
					    			return View::make('modal.vigenere',compact('term','tag'));

		    					break;
		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    	}

		    }

	    	return Response::view('errors.404', array(), 404);
       
       }catch(Excepton $e){

       		return View::make('modal.modalerror');

       }

    }

	public function register(){

		if (Auth::user()->check() == true)
		{
			return Redirect::to('member');
		}

		return View::make('register');
	
	}

	public function store()
	{

            $address = Input::get('address');
            $businesscat = "None";
            $zip= "0";
            $bname= Input::get('shop');          
            $birthdate =date('Y-m-d');
            $desc = '';
            $btype= '';
            $speciality = '';

            $rules = Tbl_user::$rulesbiasa;

      		$input = array(

      						'user_fullname' => Input::get('name'),
                			'user_img_profile' => 'avatar5.png',
                            'user_register_date' => date("Y-m-d H:i:s"),
                            'password'  => Input::get('pswd'),
                            'email' => Input::get('email'),
                            'user_role' => 'member',
                            'user_permalink' =>  str_random(6).''.Input::get('name')
                        
                        );

      		//Checking for empty variables
            $validation = Validator::make($input, $rules);

            if ($validation->passes())
            {

            	//Creating user data
                $user = Tbl_user::create($input);

                $userid = $user->user_id;    

                Auth::user()->loginUsingId($userid);

                return Response::json(array(array('status' => '1','data' => $user,'message' => 'Registered successfully, logging you in','alert'=>'alert-success')));

            }

            //return Response::json(array(array('status' => '0','message' => 'user creating failed','alert'=>'alert-danger')));

            return $validation->messages()->toJson();
	}

	/*
		Menu Pengiriman
		-ongkos

	*/
	public function login(){

		if (Auth::user()->check() == true)
		{
			return Redirect::to('member');
		}

		return View::make('login');
	
	}

	public function doLogin(){

		$data = array(
			
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'user_role' => 'member'

			);

		$validation = Validator::make($data,Tbl_user::$ruleslogin);

		if ($validation->passes()) {

			if (Auth::user()->attempt($data, Input::get('rememberme'))){

					//creating package if it doesnt have package				
					$user = Auth::user()->get();
	                
	                return Response::json(array(array('status' => '1','data' => $user,'message' => 'Logging you in','id' => Auth::user()->get()->user_id,'alert'=>'alert-success')));
	        
	        }else{

	        		return Response::json(array(array('status' => '0','message' => 'Username/Password did not match','alert'=>'alert-warning')));

	        }

		}

        return $validation->messages()->toJson();

    }

	public function doLogout(){

		Auth::user()->logout();

		return Redirect::to('/')->with('message', 'You have logged out succesfully');

	}

	/*
		Menu Member
		-ongkos

	*/
	
	public function dashboard(){	


		$messages = DB::table('tbl_messages')->join('tbl_users','tbl_users.user_id','=','tbl_messages.m_user_id')
			->select('tbl_messages.*','tbl_users.*')->get();

		return View::make('member.home',compact('messages'));
	}

}
