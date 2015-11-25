<?php

class Tbl_message extends Eloquent{

	protected $primaryKey = 'm_id';
	protected $guarded = array();				

	protected $fillable = array('m_user_id','m_text','m_last_sync','m_sync_status');
	
	public static $rules = array(

		'm_user_id'=>'required',
		'm_text'=>'required'

	  );
}
