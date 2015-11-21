
<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Tbl_user extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $primaryKey = 'user_id';
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tbl_users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $guarded = array();
	
	protected $fillable = array('user_province_id','user_fullname','password','email','user_role','user_status','user_img_profile','user_phone_number','user_birthdate','user_status','user_address','user_description','user_cover_picture','user_wa','user_line','user_business_name','user_validation_code','user_permalink','user_zip','user_website','remember_token','updated_at','user_register_date','user_slide');

	public static $rules = array(
	    'user_fullname' => 'required',
	    'user_address' => 'required',
	    'user_zip' => 'required|numeric',
	    'user_phone_number' => 'required|numeric',
	    'email' => 'required|unique:tbl_users,email',
	    'user_business_name' => 'required',
	    'user_role' => 'required',
	    'password' => 'required|confirmed|min:8'
	  );

	public static $rulesbiasa = array(
	    'user_fullname' => 'required|min:5',
	    'user_address' => 'required',
	    'password' => 'required|min:8',
	    'user_zip' => 'required|numeric',
	    'user_phone_number' => 'required|numeric',
	    'user_permalink' => 'required|unique:tbl_users,user_permalink',
	    'email' => 'required|unique:tbl_users,email'
	  );

	public static $rulesslide = array(
	    'user_slide' => 'required'
	  );

	public static $rulesprofile = array(
	    'user_fullname' => 'required',
	    'user_address' => 'required',
	    'user_zip' => 'required|numeric',
	    'user_phone_number' => 'required|numeric',
	    'user_birthdate' => 'required'
	  );

	public static $ruleslogin = array(
	    'email' => 'required|email',
	    'password' => 'required'
	  );

	public static $rulessocial = array(
	    'user_wa' => 'required|numeric',
	    'user_website' => 'required|url',
	    'user_line' => 'required|numeric'
	  );

	public static $rulesoauth = array(
	    'user_fullname' => 'required',
	    'user_business_cat' => 'required',
	    'user_address' => 'required',
	    'user_zip' => 'required|numeric',
	    'user_phone_number' => 'required|numeric',
	    'email' => 'required|unique:tbl_users,email',
	    'user_role' => 'required',
	  );

	public static $updateRules = array(
	    'user_fullname' => 'required',
	    'user_phone_number' => 'required|numeric'
	  );

	public function getRememberToken()
	{
    	return $this->remember_token;
	}

	
}
