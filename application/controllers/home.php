<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {


	public function index()
	{

		$this->load->model('product_model');
		$data['prod'] = $this->product_model->get_products();

		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('home',$data);
	}
}
