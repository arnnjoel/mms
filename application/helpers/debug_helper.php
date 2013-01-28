<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function printr($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}