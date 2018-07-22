<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('posmodal');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}

	public function index()
	{   
		$data['query']=$this->posmodal->get_product();
		$this->load->view('pos',$data);
	}
	function viewsort(){

        $keywords = $this->input->post('keywords');
       $data['query']=$this->posmodal->productfilter($keywords);
		$this->load->view('posproductfilter',$data);
    }
	public function itemadd()
	{
	 
		$data = array(
        'id'  =>$this->input->post('id'),
        'qty'     => $this->input->post('qty'),
        'price'   => 0,
        'name'    => 'pos'
		);
		$this->cart->insert($data);
		$this->load->view('posbill');
	

	}
	function removecart($rowid) 
	{

			if ($rowid==="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
			$this->cart->update($data);
		}
		redirect('pos');
		
	}
	
	function updatecart()
	{
         $data = array(
        'rowid' => $this->input->post('rowid'),
        'qty'   => $this->input->post('item')
	);
       return $this->cart->update($data);
	}
	public function posorder()
	{	
            $txnid=Time();
            $data3=array(
            	'a_id'=>$this->session->userdata('a_id'),
            	'o_wid'=>$this->session->userdata('a_wid'),
                'txnid'=> $txnid,
                'amount'=>$this->input->post('amount'),
                'p_id'=>$this->input->post('pid'),'p_sp'=>$this->input->post('pc'),'p_qty'=>$this->input->post('qty'),'o_time'=>date('Y-m-d H:i:s',strtotime('now')),
                'payment_mode' =>  $this->input->post('pay_mode'),);
       $result1=$this->posmodal->orderdetails($data3);
       $this->cart->destroy();
        /*$details1=$this->posmodal->orderdetails_txnid($txnid);
        $data['p_id'] = $details1[0]->p_id;
        $data['p_sp'] = $details1[0]->p_sp;
        $data['p_qty'] = $details1[0]->p_qty;
        $data['amount'] = $details1[0]->amount;
        $this->load->view('header');
        $this->load->view('summary',$data);
            $this->load->view('footer');*/
       }
}
