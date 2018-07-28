<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('admin');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}

	public function index()
	{   
		$data['query'] = $this->admin->get_order();
        $this->load->view('header');
		$this->load->view('account',$data);
		$this->load->view('footer');
	}
	public function filter()
	{   
        $s=$this->input->post('s');
        $e=$this->input->post('e');
		$data['query'] = $this->admin->get_order_filter($s,$e);
        $this->load->view('header');
		$this->load->view('account',$data);
		$this->load->view('footer');
	}

}
