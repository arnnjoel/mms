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
			
		redirect(base_url('admin/users'));
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
	
	public function logout()
	{
		$this->session->unset_userdata('admin');
		redirect(base_url('admin/login'));
	}
}
/* End of file admin.php */
/* Location: /application/controllers/admin.php */