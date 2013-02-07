<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller {

	public function index()
	{
		redirect(base_url('home'));
	}
	
	public function item($id)
	{
		$header['header_title'] = 'MMS - Details';
		$this->load->model('product');
		$this->load->model('category');
		
		$data = $this->product->show($id);
		$data['categories'] = $this->category->show();
		$data['best_seller'] = $this->product->best_seller(3);
		
		$this->load->view('header', $header);
		$this->load->view('details/item', $data);
		$this->load->view('right_tab', $data);
		$this->load->view('footer');
	}
}

/* End of file details.php */
/* Location: ./application/controllers/details.php */