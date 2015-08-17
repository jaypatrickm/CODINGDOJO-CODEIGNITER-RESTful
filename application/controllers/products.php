<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->model('product');
		$all_products = $this->product->get_all_products();
		$result = array('result' => $all_products);
		$this->load->view('products/index', $result);
	}

	public function new_product()
	{
		$this->load->view('products/new');
	}

	public function show($id)
	{
		$this->load->model('product');
		$product = $this->product->get_product_by_id($id);
		$this->load->view('products/show', $product);
	}

	public function edit($id)
	{
		$this->load->model('product');
		$product = $this->product->get_product_by_id($id);
		$this->load->view('products/edit', $product);
	}

	public function create()
	{
		$price = $this->input->post('productPrice');
		if (strlen($price) <= 0)
		{
			$this->session->set_flashdata('error_price', 'Please Enter Price');
			redirect('/products/new');
		} 
		else 
		{
			if (is_numeric($price))
			{
				$values = array(
						'name' => $this->input->post('productName'),
						'description' => $this->input->post('productDescription'),
						'price' => $price);
				$this->load->model('product');
				$result = $this->product->add_product($values);
				if($result)
				{
					redirect('/products');
				}
			}
			else 
			{
				$this->session->set_flashdata('error_price', 'Price must be written using numbers only. Ex. 5.99, $5.99 is not allowed.');
				redirect('/products/new');
			}
		}
		
	}

	public function update($id)
	{
		$this->load->model('product');
		$this->load->helper('date');
		$datestring = '%Y-%m-%d %H:%i:%s';
		$time = now('America/Los_Angeles');
		$values = array(
					'name' => $this->input->post('productName'),
					'description' => $this->input->post('productDescription'),
					'price' => $this->input->post('productPrice'),
					'updated_at' => mdate($datestring, $time));
		$result = $this->product->update_product($id, $values);
		if($result)
		{
			redirect('/products');
		}
	}

	public function destroy($id)
	{
		$this->load->model('product');
		$result = $this->product->destroy_product($id);
		if($result)
		{
			redirect('/products');
		}
		//$one_product = $this->product->get_product_by_id($id);
        //$this->load->view('delete', array('course' => $one_product));
	}
}

//end of main controller