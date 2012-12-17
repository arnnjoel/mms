<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	var $title   = '';
	var $content = '';
	var $date    = '';
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function add_users($data)
	{
		$save = array(
							'username' => $data['username'],
							'password' => $data['password'],
							);
		if($this->db->insert('users', $save))
			return true;
		else
			return false;
	}
}