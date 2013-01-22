<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		if($this->session->userdata('admin') == '')
			redirect(base_url('admin/login'));
			
		$this->load->model('user');
	}
	
	public function index()
	{
		$this->show();
	}
	
	public function show()
	{
		$header['header_title'] = 'MMS - Admin Page';
		$data['users'] = $this->user->get_users();
		
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/users/view', $data);
		$this->load->view('admin/footer');
	}
	
	public function edit($id)
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
	
	public function delete($id)
	{
		$this->db->delete('users', array('id' => $id));
		redirect(base_url('admin/users'));
	}
	
}
/* End of file users.php */
/* Location: /application/controllers/users.php */