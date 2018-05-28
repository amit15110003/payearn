<?php
class signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user');
	}
	
	function index()
	{
		// set form validation rules
		$this->form_validation->set_rules('u_name', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('u_lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('u_mail', 'Email ID', 'trim|required|valid_email|is_unique[user.u_mail]');
		$this->form_validation->set_rules('u_pass', 'Password', 'trim|required|md5');
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');

        }
		else
		{
			//insert user details into db
			$data = array(
				'u_name' => $this->input->post('u_name'),
				'u_lname' => $this->input->post('u_lname'),
				'u_mail' => $this->input->post('u_mail'),
				'u_contact' => $this->input->post('u_contact'),
				'u_pass' => $this->input->post('u_pass')
			);
			
			if ($this->user->insert_user($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
				redirect('signup');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('signup');
			}
		}
	}
}