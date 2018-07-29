<?php
class profile extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','cart'));
		$this->load->database();
		$this->load->model('user');
		if(!$this->session->userdata('u_id')){
                redirect('login', 'refresh');
         }

	}
	public function index()
	{
		$this->form_validation->set_rules('u_name', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('u_lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
        	$details = $this->user->get_user_by_id($this->session->userdata('u_id'));
        	$data['u_contact'] = $details[0]->u_contact;
        	$data['u_name'] = $details[0]->u_name;
        	$data['u_mail'] = $details[0]->u_mail;
        	$data['u_lname'] = $details[0]->u_lname;
        	$data['u_add'] = $details[0]->u_add;
        	if(!empty($details1))
        	{
        	$data['addr'] = $details1[0]->addr;
        	$data['state'] = $details1[0]->state;
        	$data['town'] = $details1[0]->town;
        	$data['country'] = $details1[0]->country;
        	$data['pin'] = $details1[0]->pin;
        	}
        	else{ 
        	$data['addr'] = "";
        	$data['state'] = "";
        	$data['town'] = "";
        	$data['country'] ="";
        	$data['pin'] = "";
        	}
        	$this->load->view('header',$data);
			$this->load->view('dashboard',$data);
			$this->load->view('footer',$data);
        }
		else
		{
			$id=$this->session->userdata('uid');
		    $u_name=$_POST['u_name'];
		    $u_lname=$_POST['u_lname'];
		    $u_contact=$_POST['u_contact'];
			$result=$this->user->update($id, $u_name, $u_lname, $u_contact);

		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile/index');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile/index');
			}
		}
	}
	public function account_details()
	{
		$this->form_validation->set_rules('u_name', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('u_lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
        	$details = $this->user->get_user_by_id($this->session->userdata('u_id'));
        	$data['u_contact'] = $details[0]->u_contact;
        	$data['u_name'] = $details[0]->u_name;
        	$data['u_mail'] = $details[0]->u_mail;
        	$data['u_lname'] = $details[0]->u_lname;
        	$this->load->view('header',$data);
			$this->load->view('profile',$data);
			$this->load->view('footer');
        }
		else
		{
			$id=$this->session->userdata('uid');
		    $u_name=$_POST['u_name'];
		    $u_lname=$_POST['u_lname'];
		    $u_contact=$_POST['u_contact'];
			$result=$this->user->update($id, $u_name, $u_lname, $u_contact);

		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile/account_details');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile/index');
			}
		}
	}


	public function password()
	{	
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('profile');
        }
		else
		{
			$id=$this->session->userdata('uid');
		    $password=$_POST['password'];
			$result=$this->user->updatepass($id, $password);

		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile');
			}
		}
	}

    public function remove_wish()
    {
    	$uid=$this->session->userdata('uid');
    	$id=$this->input->post('id');
		$this->db->delete('wishlist', array('productid'=>$id,
                                          'uid'=>$uid));
    }
    
    public function address()
    {
    	$this->form_validation->set_rules('u_name', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('u_lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
			$details['query']=$this->user->deliveryadd($this->session->userdata('u_id'));
			$this->load->view('header');
			$this->load->view('address',$details);
			$this->load->view('footer');
        }
		else
		{	$u_id =$this->session->userdata('u_id');
			$data = array(
				'd_fname' => $this->input->post('d_fname'),
				'd_lname' => $this->input->post('d_lname'),
				'd_mob' =>  $this->input->post('d_mob'),
				'd_country' => $this->input->post('d_country'),
				'd_add' => $this->input->post('d_add'),
				'd_state' => $this->input->post('d_state'),
				'd_town' => $this->input->post('d_town'),
				'd_pin' =>  $this->input->post('d_pin'));
				$result=$this->user->insert_delivery($data,$u_id);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile/address');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile/address');
			}
		}
    }
    public function address1($id)
    {		$u_id =$this->session->userdata('u_id');
			$data = array(
				'd_fname' => $this->input->post('d_fname'),
				'd_lname' => $this->input->post('d_lname'),
				'd_mob' =>  $this->input->post('d_mob'),
				'd_country' => $this->input->post('d_country'),
				'd_add' => $this->input->post('d_add'),
				'd_state' => $this->input->post('d_state'),
				'd_town' => $this->input->post('d_town'),
				'd_pin' =>  $this->input->post('d_pin'));
				$result=$this->user->insert_delivery($data,$u_id,$id);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div> Successfully Updated</div>');
				redirect('profile/address');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div>Oops! Error.  Something Went Wrong</div>');
				redirect('profile/address');
			}
		
    }
    public function shipping()
    {
    	$this->form_validation->set_rules('u_name1', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('u_lname1', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('profile');
        }
		else
		{	$uid =$this->session->userdata('uid');
			$data = array(
				'u_name' => $this->input->post('u_name1'),
				'u_lname' => $this->input->post('u_lname1'),
				'mob' =>  $this->input->post('mob1'),
				'country' => $this->input->post('country1'),
				'addr' => $this->input->post('addr1'),
				'state' => $this->input->post('state1'),
				'town' => $this->input->post('town1'),
				'pin' =>  $this->input->post('pin1'));
				$result=$this->user->insert_shipping($data,$uid);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile/address');
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile/address');
			}
		}
    }

    
	
	
		
}