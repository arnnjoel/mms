<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function show($id = '')
	{
		if(empty($id))
		{
			$this->db->select('*');
			$this->db->from('categories');
			$this->db->order_by('id', 'ASC');
			$query = $this->db->get();
			
			$result = $query->result_array();
			return $result;
		}
		else
		{
			$this->db->select('*');
			$this->db->from('categories');
			$this->db->where('id', $id);
			$this->db->order_by('id', 'ASC');
			$query = $this->db->get();
			
			$result = $query->row_array();
			return $result;
		}
	}
	
	function add($data)
	{
		$save = array(
							'category_name' => $data['category_name']
							);
		if($this->db->insert('categories', $save))
			return true;
		else
			return false;
	}
	
	function edit($data, $id)
	{
		$data = array(
								 'category_name' => $data['category_name']
								);
		
		$this->db->where('id', $id);
		
		if($this->db->update('categories', $data))
			return true;
		else
			return false;
	}
}