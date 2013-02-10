<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->load->model('product');
		$this->load->model('category');
		$this->load->model('checkout');
	}

	public function index()
	{
		$header['header_title'] = 'MMS - Cart';
		$data['categories'] = $this->category->show();
		$data['best_seller'] = $this->product->best_seller(3);
		
		$this->load->view('header', $header);
		$this->load->view('cart/index', $data);
		$this->load->view('right_tab', $data);
		$this->load->view('footer');
	}
	
	public function add($id)
	{
		$data = $this->product->show($id);
		$cart = array(
               'id'      => $data['id'],
               'qty'     => $_POST['quantity'],
               'price'   => $data['price'],
               'name'    =>  $data['name'],
							 'options' => array('image' => $data['image'])
            );
		$this->cart->insert($cart);
		redirect(base_url('details/item/' . $id . '?notify=success&type=add_to_cart'));
	}
	
	public function cancel_order()
	{
		$this->cart->destroy();
		redirect(base_url('cart'));
	}
	
	public function checkout_to_paypal()
  {
		if ($this->session->userdata('username') != '' && $this->session->userdata('password') != '')
		{
			$this->load->library('merchant');
			$this->merchant->load('paypal_express');
			
			$settings = array(
					'username' => 'ramble_1359372375_biz_api1.yahoo.com',
					'password' => '1359372395',
					'signature' => 'ARpnSycQWqoeyRD7ChXlhN1unGKoAI-MTqtNiX4AvfZr5dgG3hD93dUm',
					'test_mode' => true);
			
			$this->merchant->initialize($settings);
			
			foreach ($this->cart->contents() as $value)
			{
				$items[] = array(
										'name' 	=> $value['name'],
										'amt'		=> $value['price'],
										'qty'		=> $value['qty']
										);
			}
			
			$params = array(
					'items' => $items,
					'amount' => '0.00',
					'itemamt' => '0.00',
					'currency' => 'PHP',
					'return_url' => base_url('cart/checkout?notify=success&type=checkout'),
					'cancel_url' => base_url('cart/cart')
					);
			
			$response = $this->merchant->purchase($params);	
		}
		else
			redirect(base_url('account?type=checkout&redirect=cart/checkout_to_paypal'));
	}
	
	public function checkout()
	{
		$this->checkout->checkout_items();
	  $this->cart->destroy();
		redirect(base_url('cart'));
	}
	
	public function remove($id)
	{
		$data = array(
			'rowid' => $id,
			'qty'   => 0
		);

		$this->cart->update($data);
		redirect(base_url('cart'));
	}
}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */