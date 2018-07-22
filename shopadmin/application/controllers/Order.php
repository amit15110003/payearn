<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
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
		$details['query'] = $this->admin->get_order();
        $this->load->view('header');
		$this->load->view('vieworder',$details);
		$this->load->view('footer');
	}
	public function orderview($id)
	{	
		$details= $this->admin->get_orderid($id);
		$data['order_id']=$details[0]->order_id;
		$data['o_time']=$details[0]->o_time;
		$data['payment_mode']=$details[0]->payment_mode;
		$data['amount']=$details[0]->amount;
		$data['txnid']=$details[0]->txnid;
		$data['p_id']=$details[0]->p_id;
		$data['p_qty']=$details[0]->p_qty;
		$data['p_sp']=$details[0]->p_sp;
		$this->load->view('header');
		$this->load->view('orderdetails',$data);
		$this->load->view('footer');
	}

}
