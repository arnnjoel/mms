<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		if($this->session->userdata('admin') == '')
			redirect(base_url('admin/login'));
			
		$this->load->model('contact');
	}
	
	public function index()
	{
		$this->show();
	}
	
	public function show()
	{
		$header['header_title'] = 'MMS - Admin Page';
		$data['contacts'] = $this->contact->get_contacts();
		
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/contacts/show', $data);
		$this->load->view('admin/footer');
	}
	
	public function delete($id)
	{
		$this->db->delete('contacts', array('id' => $id));
		redirect(base_url('admin/contacts'));
	}
	
}
/* End of file contacts.php */
/* Location: /application/controllers/contacts.php */