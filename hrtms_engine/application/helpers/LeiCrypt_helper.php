<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('encrypt'))
{
	function encrypt($str) {

    	for ($i=0; $i < 7; $i++) { $str = base64_encode($str); }
    	return $str;
    }  
}


if (!function_exists('decrypt'))
{
	function decrypt($str) {

    	for ($i=0; $i < 7; $i++) { $str = base64_decode($str); }
    	return $str;
    }
       
}