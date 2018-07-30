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
		$details['query1']=$this->user->showproduct_recent();
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
	public function career()
	{
		$this->load->view('header');
		$this->load->view('career');
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
    function search()
	{
		if (empty($this->input->post('keyword')))
        {
			redirect($_SERVER['HTTP_REFERER']);
		}else
		{

    	$keyword = $this->input->post('keyword');
		$config = array();
        $config["base_url"] = base_url() . "index.php/shop/search";
        $config["total_rows"] = $this->user->countproduct_search($keyword);
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
    	$this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $details['query'] = $this->user->search($config["per_page"], $page,$keyword);
        $details["links"] = $this->pagination->create_links();
    	$details['category']=$this->user->showcategory();
		$this->load->view('header',$details);
    	$this->load->view('search',$details);
    	$this->load->view('footer',$details);
    	}
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
