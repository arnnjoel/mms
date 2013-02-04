<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		if($this->session->userdata('admin') == '')
			redirect(base_url('admin/login'));
			
		$this->load->model('category');
	}
	
	public function index()
	{
		$this->show();
	}
	
	public function show()
	{
		$header['header_title'] = 'MMS - Admin Page';
		$data['categories'] = $this->category->show();
	
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/categories/show', $data);
		$this->load->view('admin/footer');
	}
	
	public function add()
	{
		if(!empty($_POST))
		{
			if($this->category->add($_POST))
				redirect(base_url('admin/categories'));
		}
		$header['header_title'] = 'MMS - Admin Page';
		
		$this->load->view('admin/header', $header);
		$this->load->view('admin/categories/add');
		$this->load->view('admin/footer');
	}
	
	public function edit($id)
	{
		if(!empty($_POST))
		{
			if($this->category->edit($_POST, $id))
				redirect(base_url('admin/categories'));
		}
		$header['header_title'] = 'MMS - Admin Page';
		$data = $this->category->show($id);
		
		$this->load->view('admin/header', $header);
		$this->load->view('admin/categories/edit', $data);
		$this->load->view('admin/footer');
	}

	public function delete($id)
	{
		$this->db->delete('categories', array('id' => $id));
		redirect(base_url('admin/categories'));
	}
	
	public function category($id)
	{
		$this->load->model('product');
		$data['name'] = $this->category->get_category_name($id);
		$data['categories'] = $this->category->show();
		$data['products'] = $this->category->get_category_item($id);
		$header['header_title'] = 'MMS - Categoryes - ' . $data['name'];
		
		$this->load->view('header', $header);
		$this->load->view('categories/category', $data);
		$this->load->view('right_tab', $data);
		$this->load->view('footer');
	}
	
}
/* End of file contacts.php */
/* Location: /application/controllers/contacts.php */