<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class header extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('template/footer');
	}
}
