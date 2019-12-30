<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
	  $this->load->view('about');
		$this->load->view('template/footer');
	}
}
