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
		//for chckout example
		$this->db->select('products.id, products.name, products.price, checkouts.quantity, products.image, checkouts.created_at');
		$this->db->from('checkouts');
		$this->db->join('products', 'checkouts.product_id = products.id');
		$this->db->order_by('products.id', 'ASC');
		$query = $this->db->get();
		$result = $query->result_array();
		
		printr($result);
	}
}