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
	
	function load_user($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id', $id);
		$query = $this->db->get();
		
		if($query->num_rows() > 0)
		{
			$result = $query->row_array();
			return $result;
		}
		else
			return false;
	}
	
	function add_user($data)
	{
		print_r($data);
		$save = array(
							'username' => $data['username'],
							'password' => $data['password'],
							'email' => $data['email'],
							'phone' => $data['phone'],
							'address' => $data['address'],
							);
		if($this->db->insert('users', $save))
			return true;
		else
			return false;
	}
	
	function add_session($data)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get();
		
		if($query->num_rows() > 0)
		{
			// $query->row_array() - if only 1 result
			// $query->result_array() - if result is more than 1
			$result = $query->row_array();
			$this->session->set_userdata($result);
			return true;
		}
		else
			return false;
	}
	
	function update_user($data)
	{
		$save = array(
							'email' => $data['email'],
							'phone' => $data['phone'],
							'address' => $data['address'],
							);
		$this->db->where('id', $this->session->userdata("id"));
		if($this->db->update('users', $save))
			return true;
		else
			return false;
	}
	
	function get_users()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get();
		
		$result = $query->result_array();
		return $result;
	}
}