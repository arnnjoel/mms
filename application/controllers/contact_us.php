<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends CI_Controller {

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
		$header['header_title'] = 'MMS - Contact';

		// views
		$this->load->view('header', $header);
		$this->load->view('contacts/index');
		$this->load->view('right_tab');
		$this->load->view('footer');
	}
	
	public function send()
	{
		$this->load->model('contact');
		if($this->contact->add_contact($_POST))
			redirect(base_url('contact_us?contact=true&flag=1'));
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */