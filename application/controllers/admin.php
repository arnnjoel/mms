<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('admin') == '')
			redirect(base_url('admin/login'));
			
		$header['header_title'] = 'MMS - Admin Page';

		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	
	public function login()
	{
		if(!empty($_POST))
		{
			if($_POST['username'] == 'admin' && $_POST['password'] == 'admin')
			{
				$sess['admin'] = true;
				$this->session->set_userdata($sess);
				redirect(base_url('admin'));
			}
		}
		
		$header['header_title'] = 'MMS - Admin Page';

		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/login');
		$this->load->view('admin/footer');
	}
	
	public function contacts()
	{
		$header['header_title'] = 'MMS - Admin Page';
		$this->load->model('contact');
		$data['contacts'] = $this->contact->get_contacts();
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/contacts/show', $data);
		$this->load->view('admin/footer');
	}
	
	public function edit_contact($id)
	{
		$this->db->select('*');
		$this->db->from('contacts');
		$this->db->where('id', $id);
		$query = $this->db->get();
		
		$data['result'] = $query->row_array();
		$header['header_title'] = 'MMS - Admin Page';
		
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/contacts/edit', $data);
		$this->load->view('admin/footer');
	}
	
	public function delete_contact($id)
	{
		$this->db->delete('contacts', array('id' => $id));
		redirect(base_url('admin/contacts'));
	}
	
	public function logout()
	{
		$this->session->unset_userdata('admin');
		redirect(base_url('admin/login'));
	}
	
	public function users()
	{
		$header['header_title'] = 'MMS - Admin Page';
		$this->load->model('user');
		$data['users'] = $this->user->get_users();
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/users/view', $data);
		$this->load->view('admin/footer');
	}
	
	public function edit_user($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id', $id);
		$query = $this->db->get();
		
		$data['result'] = $query->row_array();
		$header['header_title'] = 'MMS - Admin Page';
		
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/users/edit_user', $data);
		$this->load->view('admin/footer');
	}
	
	public function delete_user($id)
	{
		$this->db->delete('users', array('id' => $id));
		redirect(base_url('admin/users'));
	}
	
	public function products()
	{
		$header['header_title'] = 'MMS - Admin Page';
		$this->load->model('product');
		$data['products'] = $this->product->get_products();
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/products/view_prod', $data);
		$this->load->view('admin/footer');
	}
	
	public function edit_product($id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id', $id);
		$query = $this->db->get();
		
		$data['result'] = $query->row_array();
		$header['header_title'] = 'MMS - Admin Page';
		
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/products/edit_prod', $data);
		$this->load->view('admin/footer');
	}
	
	public function delete_product($id)
	{
		$this->db->delete('products', array('id' => $id));
		redirect(base_url('admin/products'));
	}
	
	public function add_product()
	{
		$header['header_title'] = 'MMS - Admin Page';
		$this->load->model('product');
		$data['products'] = $this->product->add_product();
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/products/view_prod', $data);
		$this->load->view('admin/footer');
	}
	
}
/* End of file admin.php */
/* Location: /application/controllers/admin.php */