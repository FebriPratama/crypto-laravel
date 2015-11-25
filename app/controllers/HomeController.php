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
		
		$data = array(

			'ok' => 'test'

			);

		Event::fire(UpdateScoreEventHandler::EVENT, $data);

		return Response::json(array('message'=>'ok'));
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

		return Redirect::to('login')->with('message', 'You have logged out succesfully');

	}

	/*
		Menu Member
		-ongkos

	*/
	
	public function dashboard(){

		$messages = Tbl_message::all();

		return View::make('member.home',compact('messages'));
	}

}
