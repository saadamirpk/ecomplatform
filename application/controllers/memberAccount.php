<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class memberAccount extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
	  $this->load->view('memberAccount');
    $this->load->view('template/footer');
	}
}
