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
		redirect(base_url('details/item/' . $id));
	}
	
	function ipn()
	{
		$this->load->library('PayPal_IPN'); // Load the library
		
		// Try to get the IPN data.
		if ($this->paypal_ipn->validateIPN())
		{
			// Succeeded, now let's extract the order
			$this->paypal_ipn->extractOrder();
	
			// And we save the order now (persist and extract are separate because you might only want to persist the order in certain circumstances).
			$this->paypal_ipn->saveOrder();
			
			/*foreach($this->cart->contents() as $items)
			{
				printr($items);
				$item = array(
											'item_name' => $items['name'],
											'item_number' => $items['qty']
											);
				$this->ipn_order_model->saveOrder('', $item, $items['rowid']);
			}*/
	
			// Now let's check what the payment status is and act accordingly
			if ($this->paypal_ipn->orderStatus == PayPal_IPN::PAID)
			{
					/* HEALTH WARNING:
					 *
					 * Please note that this PAID block does nothing. In other words, this controller will not respond to a successful order
					 * with any notification such as email or similar. You will have to identify paid orders by checking your database.
					 *
					 * If you want to send email notifications on successful receipt of an order, please see the alternative, Smarty template-
					 * based example controller: example-smarty-email-notification.php
					 */
			}
		}
		else // Just redirect to the root URL
		{
			//redirect('/', 'refresh');
		}
	}
	
	public function checkout()
	{
		$this->checkout->checkout_items();
		$this->cart->destroy();
		redirect(base_url('cart'));
	}
}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */