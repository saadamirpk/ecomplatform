<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
	  $this->load->view('profile');
		$this->load->view('template/footer');
	}
}
