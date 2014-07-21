<?php

class EventRegister extends Eloquent {
   //use UserTrait, RemindableTrait;

	/** 
	  * Database table used by this modewl
	  * 
	  * @var string
	  */

	protected $table = 'EventRegister';

	// adding in validation rules
    public static $rules = array(
      'first_name'  => 'required',
      'last_name'   => 'required',

    );


    public function user() {
    	return $this->belongsTo('User', 'event_email', 'email');
    }
}