<?php
class wishlist extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user');
		if(!$this->session->userdata('u_id')){
                redirect('login', 'refresh');
         }

	}
	
	public function index()
	{
		$details['query']=$this->user->showwishlist($this->session->userdata('u_id'));
		$this->load->view('header');
		$this->load->view('wishlist',$details);
		$this->load->view('footer');
	}

	 public function remove_wish()
    {
    	$u_id=$this->session->userdata('u_id');
    	$id=$this->input->post('postid');
		$this->db->delete('wishlist', array('id'=>$id,
                                          'u_id'=>$u_id));
    }
	 public function move_cart()
    {
    	$u_id=$this->session->userdata('u_id');
    	$id=$this->input->post('postid');
    	$this->db->query('INSERT INTO cart (u_id,p_id,item)
                     SELECT u_id,p_id,item from wishlist where id='.$id.'&& u_id='.$u_id.'');
        $this->db->delete('wishlist',array('id'=>$id,
                                          'u_id'=>$u_id)); 
    }
	
		
}