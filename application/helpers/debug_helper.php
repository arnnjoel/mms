<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function printr($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function check_email($email){
  if(preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $email) > 0)
    return true;
  else
    return false;
}