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
	{   if($this->session->userdata('a_design')=="Admin")
		{
			$data['query']=$this->productmodal->get_product();
	    }
	    elseif($this->session->userdata('a_design')=="Vendor")
	    {$data['query']=$this->productmodal->get_product_wid($this->session->userdata('a_wid'));}
	    else{$data['query']="";}
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
                          'height' => 300
                           
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
            if($this->session->userdata('a_wid')){
		    $wid=$this->session->userdata('a_wid');}
		    else{$wid=0;}
			$data = array
			(
				'p_name' => $this->input->post('p_name'),
				'p_desc' => $this->input->post('p_desc'),
				'p_adddesc' => $this->input->post('p_adddesc'),
				'p_cp' => $this->input->post('p_cp'),
				'p_sp' => $this->input->post('p_sp'),
				'p_stock' => $this->input->post('p_stock'),
				'p_category' => $this->input->post('p_category'),
				'p_warehouse' => $wid,
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
	public function product_id($p_id)
	{   $details=$this->productmodal->productbyid($p_id);
        	    	$data['p_id'] = $details[0]->p_id;
        			$data['p_name'] = $details[0]->p_name;
        			$data['p_desc'] = $details[0]->p_desc;
        			$data['p_adddesc'] = $details[0]->p_adddesc;
					$data['p_cp'] = $details[0]->p_cp;
					$data['p_sp'] = $details[0]->p_sp;
					$data['p_stock'] = $details[0]->p_stock;
					$data['p_category'] = $details[0]->p_category;
					$data['p_image'] = $details[0]->p_image;
     			$this->load->view('header');
				$this->load->view('productbyid',$data);
				$this->load->view('footer');}
	public function update_product($p_id)
	{	if(!empty($_FILES['picture']['name'])){
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
                          'height' => 300
                           
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
            $p_id=$this->input->post('p_id');
		 	$del_image=$this->input->post('p_image');
		 	if(!empty($picture))
		 	{
		 		unlink("../uploads/product/".$del_image);
		 		unlink("../uploads/product/thumb/".$del_image);
		 	}
		 	else{$picture=$del_image;}

			$data = array
			(
				'p_name' => $this->input->post('p_name'),
				'p_desc' => $this->input->post('p_desc'),
				'p_adddesc' => $this->input->post('p_adddesc'),
				'p_cp' => $this->input->post('p_cp'),
				'p_sp' => $this->input->post('p_sp'),
				'p_stock' => $this->input->post('p_stock'),
				'p_category' => $this->input->post('p_category'),
				'p_status' => $this->input->post('p_status'),
				'p_image' => $picture
			);
			
			if ($this->productmodal->update_product($p_id,$data))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				//redirect($_SERVER['HTTP_REFERER']);
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
