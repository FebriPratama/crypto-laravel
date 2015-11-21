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

    public function modal($term,$tag,$action = null)
    {

    	try{

	    	if(Auth::user()->check() || Auth::admin()->check())
	    	{

		    	switch ($term) {
		    		case 'customer':

		    			switch ($action) {
		    				case 'delete':

					    			$customer = Tbl_customer::find($tag);
					    			
					    			if(is_object($customer) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.customerdelete',compact('term','tag','customer'));

		    					break;

		    				case 'edit':

					    			$customer = Tbl_customer::find($tag);
					    			
					    			if(is_object($customer) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.customeredit',compact('term','tag','customer'));

		    					break;

		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		case 'package':

		    			switch ($action) {
		    				case 'delete':

					    			$package = Tbl_package::find($tag);
					    			
					    			if(is_object($package) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.packagedelete',compact('term','tag','package'));

		    					break;

		    				case 'edit':

					    			$package = Tbl_package::find($tag);
					    			
					    			if(is_object($package) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.packageedit',compact('term','tag','package'));

		    					break;

		    				case 'create':

					    			return View::make('modal.packagecreate',compact('term','tag'));

		    					break;

		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		case 'channel':

		    			switch ($action) {
		    				case 'add':
					    			
					    			return View::make('modal.channeladd',compact('term','tag'));

		    					break;
		    				case 'remove':
		    				
					    			return View::make('modal.channelremove',compact('term','tag'));

		    					break;
		    				case 'disconnect':

					    			return View::make('modal.channeldc',compact('term','tag'));

		    					break;
		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

					    return View::make('modal.channeldc',compact('term','action','tag','result'));

		    		break;
		    		case 'instagram':

		    			switch ($action) {
		    				case 'comments':

					    			$result = OauthController::igConsole('/media/'.$tag);

					    			/*
					    			if(is_object($result) == false){
					    				
					    				return View::make('modal.modalerror');

					    			}
					    			*/
					    			return View::make('modal.instagramcomments',compact('term','tag','result'));

		    					break;

		    				case 'edit':

					    			$notif = Tbl_notification_type::find($tag);
					    			
					    			if(is_object($notif) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.notifedit',compact('term','tag','notif'));

		    					break;

		    				case 'create':

					    			return View::make('modal.notifcreate',compact('term','tag'));

		    					break;

		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		case 'notif':

		    			switch ($action) {
		    				case 'delete':

					    			$notif = Tbl_notification_type::find($tag);
					    			
					    			if(is_object($notif) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.notifdelete',compact('term','tag','notif'));

		    					break;

		    				case 'edit':

					    			$notif = Tbl_notification_type::find($tag);
					    			
					    			if(is_object($notif) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.notifedit',compact('term','tag','notif'));

		    					break;

		    				case 'create':

					    			return View::make('modal.notifcreate',compact('term','tag'));

		    					break;

		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		case 'voucher':

		    			switch ($action) {
		    				case 'delete':

					    			$voucher = Tbl_voucher::find($tag);
					    			
					    			if(is_object($voucher) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.voucherdelete',compact('term','tag','voucher'));

		    					break;

		    				case 'edit':

					    			$voucher = Tbl_voucher::find($tag);
					    			
					    			if(is_object($voucher) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.voucheredit',compact('term','tag','voucher'));

		    					break;

		    				case 'create':

					    			return View::make('modal.vouchercreate',compact('term','tag'));

		    					break;

		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		case 'product':

		    			switch ($action) {
		    				case 'delete':

					    			$product = Tbl_product::find($tag);
					    			
					    			if(is_object($product) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}

					    			return View::make('modal.productdelete',compact('term','tag','product'));

		    					break;

		    				case 'edit':

					    			$product = Tbl_product::find($tag);

					    			if(is_object($product) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}

					    			return View::make('modal.productedit',compact('term','tag','product'));

		    					break;

		    				case 'photo':

					    			$product = Tbl_product::find($tag);
					    			
					    			if(is_object($product) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}

					    			return View::make('modal.productphoto',compact('term','tag','product'));

		    					break;

		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		case 'page':

		    			switch ($action) {
		    				case 'delete':

					    			$page = Tbl_page::find($tag);
					    			
					    			if(is_object($page) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.pagedelete',compact('term','tag','page'));

		    					break;
		    				case 'connect':

					    			$page = Tbl_page::find($tag);
					    			
					    			if(is_object($page) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.pagedelete',compact('term','tag','page'));

		    					break;
		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		case 'invoice':

		    			switch ($action) {
		    				case 'choose':

					    			switch($tag){

					    				case 'facebook':

					    					return View::make('modal.invoicefacebook',compact('term','tag','page'));

					    				break;

					    				case 'twitter':
					    					
					    					return vieww::make('modal.invoicetwitter',compact('term','tag','page'));

					    				break;
					    				case 'instagram':

					    					return View::make('modal.invoiceinstagram',compact('term','tag','page'));

					    				break;

					    				default:
					    					
					    					return Response::view('errors.404', array(), 404);

					    				break;

					    			}
					    			
					    			return View::make('modal.pagedelete',compact('term','tag','page'));

		    					break;
		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		case 'member':

		    			switch ($action) {
		    				case 'delete':

					    			$user = Tbl_user::find($tag);
					    			
					    			if(is_object($user) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.memberdelete',compact('term','tag','user'));

		    					break;

		    				case 'edit':

					    			$user = Tbl_user::find($tag);
					    			
					    			if(is_object($user) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.memberedit',compact('term','tag','user'));

		    					break;
		    				case 'slide':

					    			$user = Tbl_user::find($tag);
					    			
					    			if(is_object($user) == false){
					    				
					    				return View::make('modal.modaldeleted');

					    			}
					    			
					    			return View::make('modal.memberslide',compact('term','tag','user'));

		    					break;

		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		case 'upgrade':

		    			return View::make('modal.upgrade',compact('term','tag'));

		    		break;
		    		case 'profile':

		    			switch ($action) {

		    				case 'edit':

					    			return View::make('modal.profileedit',compact('term','tag'));

		    					break;

		    				case 'email':

					    			return View::make('modal.profileemail',compact('term','tag'));

		    					break;

		    				case 'photo':

					    			return View::make('modal.profilephoto',compact('term','tag'));

		    					break;

		    				default:

		    					return Response::view('errors.404', array(), 404);

		    					break;
		    			}

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    		default:

		    			return Response::view('errors.404', array(), 404);

		    		break;
		    	}

	    	}else{

		    	switch ($term) {

			    		case 'search':

			    			return View::make('modal.search');

			    		break;
			    		default:

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

		return View::make('member.home');
	}

}
