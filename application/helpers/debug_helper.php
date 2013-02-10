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

function currency_converter($amount, $from, $to) {
	$amount = $amount;
	$from_currency = $from;
	$to_currency = $to;
	
	$amount = urlencode($amount);
	$from_currency = urlencode($from_currency);
	$to_currency = urlencode($to_currency);
	$submit_url = "http://www.google.com/ig/calculator?hl=en&q=$amount$from_currency=?$to_currency";
	$chr = curl_init();
	
	curl_setopt ($chr, CURLOPT_URL, $submit_url);
	curl_setopt ($chr, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($chr,  CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
	curl_setopt ($chr, CURLOPT_CONNECTTIMEOUT, 0);
	$data = curl_exec($chr);
	curl_close($chr);
	
	$data = explode('"', $data);
	$rate=$data[3];
	$rate = explode(' ', $rate);
	$rate = trim($rate[0]);
	
	return $rate;
}