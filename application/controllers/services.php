<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

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
		$header['header_title'] = 'MMS - Services';
		$this->load->model('category');
		
		$data['categories'] = $this->category->show();
		
		// views
		$this->load->view('header', $header);
		$this->load->view('services/index', $data);
		$this->load->view('right_tab', $data);
		$this->load->view('footer');
	}
}

/* End of file services.php */
/* Location: ./application/controllers/services.php */