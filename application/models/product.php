<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function get_products()
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get();
		
		$result = $query->result_array();
		return $result;
	}
	
	function add_product($data)
	{
		//print_r($data);
		$save = array(
							'prod_name' => $data['prod_name'],
							'prod_price' => $data['prod_price'],
							'description' => $data['description'],
							);
		if($this->db->insert('products', $save))
			return true;
		else
			return false;
	}
	
	function update_product($data)
	{
	}
	
	function show_product($id)
	{
	}
}