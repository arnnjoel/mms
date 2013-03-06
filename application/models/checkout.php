<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Model {

	var $title   = '';
	var $content = '';
	var $date    = '';
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function checkout_items()
	{
		foreach($this->cart->contents() as $items)
		{
			$data = array(
									'product_id' => $items['id'],
									'user_id'		 => $this->session->userdata('id'),
									'quantity'	 => $items['qty']
									);
			$this->db->insert('checkouts', $data);
			
			$this->db->select('quantity');
			$this->db->from('products');
			$this->db->where('id', $items['id']);
			$query = $this->db->get();
			$result = $query->row_array();
			$quantity = $result['quantity'] - $items['qty'];
			

			$edit['quantity'] = $quantity;
			$this->db->where('id', $items['id']);
			$this->db->update('products', $edit);
		}
		return true;
	}
	
	function show()
	{
		$this->load->library('pagination');
		
		//for chckout example
		$this->db->select('id');
		$this->db->from('checkouts');
		$query = $this->db->get();
	
		$config['base_url'] = base_url('admin/checkouts/show');
		$config['uri_segment'] = 4;
		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 5; 
		$this->pagination->initialize($config); 
		
		$this->db->select('checkouts.id as checkout_id, products.id, products.name, products.price, checkouts.quantity, checkouts.created_at, status, users.*');
		$this->db->from('checkouts');
		$this->db->join('products', 'checkouts.product_id = products.id');
		$this->db->join('users', 'checkouts.user_id = users.id');
		$this->db->order_by('checkouts.id', 'DESC');
		$this->db->limit($config['per_page'], $this->uri->segment(4));
		$query = $this->db->get();
		$result = $query->result_array();

		return $result;
		//printr($result);
		//printr($this->db->queries);
	}
	
	function update($data) {
		$update = array(
			'status' => $data['status'] == 'delivered' ? 'delivered' : ''
		);
		
		$this->db->where('id', $data['id']);
		if($this->db->update('checkouts', $update))
			return true;
		else
			return false;
	}
}