<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('productmodal');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}
	public function index()
	{   $data['query']=$this->productmodal->get_product();
		$this->load->view('header');
		$this->load->view('viewproduct',$data);
		$this->load->view('footer');
	}
	public function insertproduct()
	{
		$this->load->view('header');
		$this->load->view('product');
		$this->load->view('footer');
	}
	public function add_product()
	{   
		if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/product';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/product');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' => 400
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
		
			$data = array
			(
				'p_name' => $this->input->post('p_name'),
				'p_desc' => $this->input->post('p_desc'),
				'p_adddesc' => $this->input->post('p_adddesc'),
				'p_cp' => $this->input->post('p_cp'),
				'p_sp' => $this->input->post('p_sp'),
				'p_stock' => $this->input->post('p_stock'),
				'p_category' => $this->input->post('p_category'),
				'p_warehouse' => $this->input->post('p_warehouse'),

				'p_status' => $this->input->post('p_status'),
				'p_image' => $picture
			);
			
			if ($this->productmodal->add_product($data))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		
	}


	public function toggle_product($w_id,$w_status)
	{        
	        $w_status1=1-$w_status;
			if ($this->admin->toggle_product($w_id,$w_status1))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}

	}
