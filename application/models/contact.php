<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function add_contact($data)
	{
		print_r($data);
		$save = array(
							'name' => $data['name'],
							'email' => $data['email'],
							'phone' => $data['phone'],
							'address' => $data['address'],
							'message' => $data['message'],
							);
		if($this->db->insert('contacts', $save))
			return true;
		else
			return false;
	}
	
	function get_contacts()
	{
		$this->db->select('*');
		$this->db->from('contacts');
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get();
		
		$result = $query->result_array();
		return $result;
	}
}