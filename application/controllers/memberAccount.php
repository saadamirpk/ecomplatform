<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class memberAccount extends CI_Controller {


	public function index()
	{  
$this->load->helper('url');
$this->load->view('header');
$this->load->view('memberAccount_view');
$formArray=array();
if($this->input->post('firstname')!= NULL){
$this->load->model('memberAccount_model');     
$formArray['firstname']=$this->input->post('firstname');
$formArray['lastname']=$this->input->post('lastname');
$formArray['email']=$this->input->post('email');
$formArray['password']=$this->input->post('password');
    
$this->memberAccount_model->enter($formArray);
    redirect(base_url().'memberAccount/index');
}
}
}