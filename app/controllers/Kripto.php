<?php

DEFINE('KEY','YOUNOOB');

class Kripto extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public static function encode($text){

		/*
			Rumusnye = Ci=(Pi+Ki) mod 26.
		*/

		$plain_text=str_split($text);
		$n=count($plain_text);
		$key=str_split(KEY);
		$m=count($key);

		$encrypted_text='';

		for ($i=0; $i<$n;$i++){

			$encrypted_text.=chr(((ord($plain_text[$i])-65+ord($key[$i%$m])-65)%26) +65);

		}
			
		return $encrypted_text;

	}

	public static function decode($text){

		/*

			Rumusnye = Ci=(Pi-Ki) mod 26.

		*/

		$encrypted_text=str_split($text);
		$n=count($encrypted_text);
		$key=str_split(KEY);
		$m=count($key);
		$decrypted_text='';

		for ($i=0; $i<$n;$i++){

			$decrypted_text.=chr(((26+ord($encrypted_text[$i])-65-ord($key[$i%$m])+65)%26) +65);

		}
			
		return $decrypted_text;

	}

}
