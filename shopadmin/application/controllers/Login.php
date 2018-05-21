<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('admin');
			/*if($this->session->userdata('a_id')){
                redirect('', 'refresh');
         }*/
	}
	public function index()
	{
			$this->load->view('login');
        
    }
    public function login()
    {
		// get form input
		$a_mail = $this->input->post("a_mail");
        $a_pass = $this->input->post("a_pass");

		// form validation
		$this->form_validation->set_rules("a_mail", "Email-ID", "trim|required");
		$this->form_validation->set_rules("a_pass", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
		else
		{
			// check for user credentials
			$uresult = $this->admin->adminlogin($a_mail, $a_pass);
			if (count($uresult) > 0)
			{  
				$sess_data = array('login' => TRUE, 'a_username' => $uresult[0]->a_username,'a_id' => $uresult[0]->a_id,'a_mail'=> $uresult[0]->a_mail);

				$this->session->set_userdata($sess_data);
				redirect('home');
		    }
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert text-center">Wrong Email-ID or Password!</div>');
				redirect('login/index');
			}
		}
    }

    function signup()
	{
		// set form validation rules
		$this->form_validation->set_rules('a_username', 'a_username', 'trim|required|min_length[3]|max_length[30]|is_unique[admin_login.a_username]');
		$this->form_validation->set_rules('a_mail', 'Email ID', 'trim|required|valid_email|is_unique[admin_login.a_mail]');
		$this->form_validation->set_rules('a_pass', 'Password', 'trim|required|md5');
		
		if ($this->form_validation->run() == TRUE)
        {
			//insert admin details into db
			$data = array(
				'a_username' => $this->input->post('a_username'),
				'a_mail' => $this->input->post('a_mail'),
				'a_pass' => $this->input->post('a_pass')
			);
			
			if ($this->admin->insert_admin($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
				redirect('login');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('signup');
			}
		}
	}

	public function forget()
	{
			$uresult = $this->admin->get_adminpass($email);
			if (count($uresult) > 0)
			{
                    $stdpass =  $uresult[0]->password;
                    $id =  $uresult[0]->id;//FETCHING PASS
                    $plaintext_string = $this->encrypt->decode($stdpass);
                    $key = 'md5';
                    $encrypted_string = $this->encrypt->decode($stdpass, $key);
                    $to = $uresult[0]->email;
                    $from = "info@thehippogriff.com";
                                $url = "thehippogriff.com";      $body  =  " recover your password
                                 <br>
                                hi : $to;
                                Here is your Link :  <br>
                                <a href='http://thehippogriff.com/hippo/forget/recover/$id/$stdpass' style=' background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 16px;
    text-align: center;
    text-decoration: none;
    border-radius:3px;
    display: inline-block;
    font-size: 16px;'>Recover Link</a><br>
                                
                                Sincerely,<br>
                                
                        
                                info@thehippogriff.com";
                        
                                $from = "info@thehippogriff.com";
                        
                                $subject = "Thehippogriff Password Recover";
                        
                                $headers1 = "From: $from\n";
                        
                                $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
                        
                                $headers1 .= "X-Priority: 1\r\n";
                        
                                $headers1 .= "X-MSMail-Priority: High\r\n";
                        
                                $headers1 .= "X-Mailer: Just My Server\r\n";
                        
                                $sentmail = mail ( $to, $subject, $body, $headers1 );
				
				$this->session->set_flashdata('msg', '<div class="alert  text-center">Recovery Link will be sent to your email.</div>');
				redirect('forget');
				
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID </div>');
				redirect('forget');
			}
		
		
    }
    
    public function recover($id,$stdpass)
    {
			// check for admin credentials
			$uresult = $this->admin->get_userdir($id,$stdpass);
			if (count($uresult) > 0)
			{
				// set session
				$sess_data = array('login' => TRUE, 'fname' => $uresult[0]->fname,'lname' => $uresult[0]->lname, 'uid' => $uresult[0]->id,'email'=> $uresult[0]->email,'contact'=> $uresult[0]->contact);

				$this->session->set_userdata($sess_data);
				
				redirect('Profile/account_details');
				
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
				redirect('login');
			}
		
    }
	
}