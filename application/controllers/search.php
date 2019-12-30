<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {


	public function index(){
		$this->load->model('product_model');
		$data['prod'] = $this->product_model->get_products();
		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('template/footer');
	}

  public function category($cat=NULL){
    if($cat==NULL){
      redirect('search');
    }
    $this->load->model('product_model');
		$data['prod'] = $this->product_model->get_category($cat);

		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('template/footer');
  }
}
