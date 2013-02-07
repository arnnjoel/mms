<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

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
			
			$this->db->select('products.*, categories.category_name');
			$this->db->from('products');
			$this->db->join('categories', 'categories.id = products.category_id');
			$this->db->order_by('products.id', 'ASC');
			$query = $this->db->get();
			
			$config['base_url'] = base_url('admin/products/show');
			$config['uri_segment'] = 4;
			$config['total_rows'] = $query->num_rows();
			$config['per_page'] = 4; 
			$this->pagination->initialize($config); 
			
			$this->db->select('products.*, categories.category_name');
			$this->db->from('products');
			$this->db->join('categories', 'categories.id = products.category_id');
			$this->db->order_by('products.id', 'ASC');
			$this->db->limit($config['per_page'], $this->uri->segment(4));
			$query = $this->db->get();
			
			$result = $query->result_array();
			return $result;
		}
		else
		{
			$this->db->select('products.*, categories.category_name');
			$this->db->from('products');
			$this->db->join('categories', 'categories.id = products.category_id');
			$this->db->where('products.id', $id);
			$this->db->order_by('products.id', 'ASC');
			$query = $this->db->get();
			
			$result = $query->row_array();
			return $result;
		}
	}
	
	function add($data, $file = '')
	{
		preg_match('/\.[^\.]+$/i', $file['image']['name'], $match);
		$file_ext = $match[0];
		$filename = uniqid() . $file_ext;
		
		if($file_ext == '.BMP' || $file_ext == '.bmp' || $file_ext == '.jpg' || $file_ext == '.JPG' || $file_ext == '.PNG' || $file_ext == '.png')
		{
			$save = array(
								'name' => $data['name'],
								'price' => $data['price'],
								'description' => $data['description'],
								'quantity' => $data['quantity'],
								'category_id' => $data['category'],
								'image' => $filename
								);
			if($this->db->insert('products', $save))
			{
				if (file_exists("images/uploads/" . $filename))
					return false;
				else
				{
					move_uploaded_file($file['image']['tmp_name'], "images/uploads/" . $filename);
					return true;
				}
			}
			else
				return false;
		}
		else
			return false;
	}
	
	function edit($data, $id, $file = '')
	{
		preg_match('/\.[^\.]+$/i', $file['image']['name'], $match);
		$file_ext = $match[0];
		$filename = uniqid() . $file_ext;

		//if($this->validate_email($data['email']) == false)
			//return false;
			
		$data = array(
							'name' => $data['name'],
							'price' => $data['price'],
							'description' => $data['description'],
							'quantity' => $data['quantity'],
							'category_id' => $data['category'],
							'image' => $filename
							);
		
		$this->db->where('id', $id);
		if($this->db->update('products', $data))
		{
			if (file_exists("images/uploads/" . $filename))
				return false;
			else
			{
				move_uploaded_file($file['image']['tmp_name'], "images/uploads/" . $filename);
				return true;
      }
		}
		else
			return false;
	}
	
	function featured_products($limit = 10)
	{
		$this->db->select('products.*, categories.category_name');
			$this->db->from('products');
			$this->db->join('categories', 'categories.id = products.category_id');
			$this->db->order_by('products.id', 'random');
			$this->db->limit($limit);
			$query = $this->db->get();
			
			$result = $query->result_array();
			return $result;
	}
	
	function new_products($limit = 6)
	{
		$this->db->select('products.*, categories.category_name');
		$this->db->from('products');
		$this->db->join('categories', 'categories.id = products.category_id');
		$this->db->order_by('products.id', 'desc');
		$this->db->limit($limit);
		$query = $this->db->get();
		
		$result = $query->result_array();
		return $result;
	}
	
	function best_seller($limit = 2)
	{
		$this->db->select('SUM( checkouts.quantity ) as total_qty, product_id, products.name, products.image');
		$this->db->from('checkouts');
		$this->db->join('products', 'checkouts.product_id = products.id', 'left');
		$this->db->where('products.quantity >', 0);
		$this->db->group_by('product_id');
		$this->db->order_by('total_qty', 'DESC');
		$this->db->limit($limit);
		$query = $this->db->get();
		
		$result = $query->result_array();
		
		//printr($result);
		
		return $result;
		//SELECT SUM(QUANTITY) as total_qty, product_id FROM `checkouts` GROUP BY product_id ORDER BY total_qty DESC LIMIT 2
	}
}