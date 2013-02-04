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
			$this->load->library('pagination');
			
			$this->db->select('*');
			$this->db->from('categories');
			$this->db->order_by('id', 'ASC');
			$query = $this->db->get();
			
			/*$config['base_url'] = base_url('admin/categories/show');
			$config['uri_segment'] = 4;
			$config['total_rows'] = $query->num_rows();
			$config['per_page'] = 1; 
			$this->pagination->initialize($config); 
			
			$this->db->select('*');
			$this->db->from('categories');
			$this->db->order_by('id', 'ASC');
			$this->db->limit($config['per_page'], $this->uri->segment(4));
			$query = $this->db->get();*/
			
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
	
	function get_category_item($id)
	{
		$this->load->library('pagination');
		
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('category_id', $id);
		$query = $this->db->get();
		
		$config['base_url'] = base_url('categories/category/' . $id . '/');
		$config['uri_segment'] = 4;
		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 1; 
		$this->pagination->initialize($config); 
		
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('category_id', $id);
		$this->db->limit($config['per_page'], $this->uri->segment(4));
		$query = $this->db->get();
		
		$result = $query->result_array();
		
		return $result;
	}
	
	function get_category_name($id)
	{
		$this->db->select('category_name');
		$this->db->from('categories');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$cat_name = $query->row_array();
		return $cat_name['category_name'];
	}
}