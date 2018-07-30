<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url', 'html','text','typography','date'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('user');
	}

	public function index($category)
	{	

		$details['query']=$this->user->showproduct();
		$details['category']=$this->user->showcategory();
		$this->load->view('header',$details);
		$this->load->view('single-product.php',$details);
	}

	public function category($category)
	{	
		$category = str_replace('%20',' ', $category);
		$config = array();
        $config["base_url"] = base_url() . "index.php/product/view/$category";
        $config["total_rows"] = $this->user->countproduct_category($category);
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $details['query'] = $this->user->showproduct_category($config["per_page"], $page,$category);
        $details["links"] = $this->pagination->create_links();
		$details['categoryval']=$category;
		$this->load->view('header');
		$this->load->view('category',$details);
		$this->load->view('footer');
	}

	public function details($p_category,$p_name)
	{	

		$p_category = str_replace('%20', ' ', $p_category);
		$details=$this->user->get_product_id($p_category,$p_name);
		$data['query2']=$this->user->showproduct_mostview_cat1($p_category);
			$data['p_id'] = $details[0]->p_id;
			$data['p_image'] = $details[0]->p_image;
			$data['p_name'] = $details[0]->p_name;
        	$data['p_desc'] = $details[0]->p_desc;
        	$data['p_cp'] = $details[0]->p_cp;
        	$data['p_sp'] = $details[0]->p_sp;
        	$data['p_adddesc'] = $details[0]->p_adddesc;
        	$data['p_category'] = $details[0]->p_category;
        	$data['p_view'] = $details[0]->p_view;
        	$view=$data['p_view']+1;
		$this->user->updateview($details[0]->p_id,$view);
		$this->load->view('header',$details);
		$this->load->view('product',$data);
		$this->load->view('footer');
	}

	 function viewsort($category){
        $sortBy = $this->input->post('sortBy');
        $category = str_replace('%20', ' ', $category);
        $details['categoryval']=$category;
		$details['category']=$this->user->showcategory();
        if($sortBy=="high")
        {
		$details['query']=$this->user->sortproduct_high($category);
		}
		else if($sortBy=="low")
		{
			$details['query']=$this->user->sortproduct_low($category);
		}
		else if($sortBy=="popular")
		{
			$details['query']=$this->user->sortproduct_popular($category);
		}
		else if($sortBy=="new")
		{
			$details['query']=$this->user->sortproduct_new($category);
		}
		else
		{
			$details['query']=$this->user->sortproduct($category);
		}
		$this->load->view('category1',$details);
    }


	public function login()
    {
		// get form input
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user->get_user($email,$password);
			if (count($uresult) > 0)
			{
				// set session
				$sess_data = array('login' => TRUE, 'fname' => $uresult[0]->fname,'lname' => $uresult[0]->lname, 'uid' => $uresult[0]->id,'email'=> $uresult[0]->email,'contact'=> $uresult[0]->contact);

				$this->session->set_userdata($sess_data);
				
				redirect('');
				
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
				redirect('');
			}
		}
    }

    
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('');
	}
}
