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
}