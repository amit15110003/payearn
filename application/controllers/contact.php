<?php
class contact extends CI_Controller
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
		$this->form_validation->set_rules('c_name', 'Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('c_mail', 'Email ID', 'trim|required|valid_email');
		$this->form_validation->set_rules('c_subject', 'Subject', 'trim');
		$this->form_validation->set_rules('c_message', 'Message', 'trim');
		
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('footer');

        }
		else
		{
			//insert message details into db
			$data = array(
				'c_name' => $this->input->post('c_name'),
				'c_mail' => $this->input->post('c_mail'),
				'c_subject' => $this->input->post('c_subject'),
				'c_message' => $this->input->post('c_message')
			);
				if ($this->user->insert_contact($data))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect('contact');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect('contact');
			}
		    
		}
			
			
		}
	}
