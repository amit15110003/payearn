<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('user');

	}
	public function index()
	{
		$details['query']=$this->user->showproduct_mostview_cat();
		$this->load->view('header');
		$this->load->view('index',$details);
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function recharge()
	{
		$this->load->view('header');
		$this->load->view('recharge');
		$this->load->view('footer');
	}
	public function terms()
	{
		$this->load->view('header');
		$this->load->view('terms');
		$this->load->view('footer');
	}
	public function privacy()
	{
		$this->load->view('header');
		$this->load->view('privacy');
		$this->load->view('footer');
	}
	public function carrer()
	{
		$this->load->view('header');
		$this->load->view('carrer');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function subscribe()
    {
    	$email = $this->input->post("email");
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[subscribe.s_mail]');
		if ($this->form_validation->run() == FALSE)
        {       
                $data['status']="Already Registered Or Error";
		$this->load->view('subscriber',$data);	
        }
		else
		{
         if ($this->user->insert_subscriber($email))
			{ 
		$data['status']="Successfully Registered";
			}
			else
			{
				
		$data['status']="Already Registered";
			}
		$this->load->view('subscriber',$data);}
    }
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect($_SERVER['HTTP_REFERER']);
	}
}
