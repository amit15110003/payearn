<?php
class payment extends CI_Controller
{
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
		$data=$this->user->showcart($this->session->userdata('u_id'));
	    $amount=0;
         if(!empty($cart =$this->cart->contents()))
                { foreach ($cart as $item )
                    {
                             $details=$this->user->get_product_by_id($item['id']);
                            $amount=$amount+($details[0]->p_sp*$item['qty']);
                    }
                }
            elseif(!empty($this->session->userdata('uid'))){
                $details1=$this->user->showcart($this->session->userdata('u_id'));
               if(!empty($details1)){foreach ($details1 as $row ) 
               { 
                  $details=$this->user->get_product_by_id($row->productid);
                   $amount=$amount+($details[0]->p_sp*$row->item);}
             }}
             $txnid=$this->input->post('txnid');
            $data3=array(
                'txnid'=> $txnid,
                'amount'=>$amount,
                'delivery_email' =>  $this->input->post('delivery_email'),
                'delivery_name' => $this->input->post('delivery_name'),
                'delivery_address' => $this->input->post('delivery_address'),
                'delivery_city' => $this->input->post('delivery_city'),
                'delivery_state' =>  $this->input->post('delivery_state'),
                'delivery_zip' => $this->input->post('delivery_zip'),
                'delivery_country' => $this->input->post('delivery_country'),
                'delivery_tel' =>  $this->input->post('delivery_tel'),
                'p_id'=>$this->input->post('pid'),'p_sp'=>$this->input->post('pc'),'p_qty'=>$this->input->post('qty'),'o_time'=>date('Y-m-d H:i:s',strtotime('now')),
                'payment_mode' =>  $this->input->post('pay_mode'),);
       $result1=$this->user->orderdetails($data3);
       if($this->input->post('pay_mode')=="cod")
       {
            $details1=$this->user->orderdetails_txnid($txnid);
            $data['delivery_name'] = $details1[0]->delivery_name;
            $data['delivery_country'] = $details1[0]->delivery_country;
            $data['delivery_state'] = $details1[0]->delivery_state;
            $data['delivery_city'] = $details1[0]->delivery_city;
            $data['delivery_address'] = $details1[0]->delivery_address;
            $data['delivery_tel'] = $details1[0]->delivery_tel;
            $data['delivery_zip'] = $details1[0]->delivery_zip;
            $data['p_id'] = $details1[0]->p_id;
            $data['p_sp'] = $details1[0]->p_sp;
            $data['p_qty'] = $details1[0]->p_qty;
            $data['amount'] = $details1[0]->amount;
            $this->load->view('header');
            $this->load->view('summary',$data);
            $this->load->view('footer');
       }
       elseif($this->input->post('pay_mode')=="op")
       {
          $merchant_data='';
            $working_key='ED2B71ACB9F520BA54B3C73381291A53';
            $access_code='AVSH64DB03BF70HSFB';
        $data = array(
                'tid'=> $this->input->post('txnid'),
                'merchant_id' =>'90818',
                //'order_id' => $oid,
                'amount'=>$j,
                'currency'=> 'INR',
                'redirect_url' =>'http://thehippogriff.com/index.php/payment/status',
                'cancel_url' =>'http://thehippogriff.com/index.php/payment/status',
                'language' =>'EN',
                'billing_name' => $this->input->post('billing_name'),
                'billing_address' => $this->input->post('billing_address'),
                'billing_city' => $this->input->post('billing_city'),
                'billing_state' =>  $this->input->post('billing_state'),
                'billing_zip' => $this->input->post('billing_zip'),
                'billing_country' => 'India',
                'billing_tel' =>  $this->input->post('billing_tel'),
                'billing_email' =>  $this->input->post('billing_email'),
                'delivery_name' => $this->input->post('billing_name'),
                'delivery_address' => $this->input->post('billing_address'),
                'delivery_city' => $this->input->post('billing_city'),
                'delivery_state' =>  $this->input->post('billing_state'),
                'delivery_zip' => $this->input->post('billing_zip'),
                'delivery_country' => 'India',
                'delivery_tel' =>  $this->input->post('billing_tel'),
                'merchant_param1'=>$this->input->post('pid'),
                'merchant_param2'=>'additional Info.',
                'merchant_param3'=>'additional Info.',
                'merchant_param4'=>'additional Info.',
                'merchant_param5'=>'additional Info.',
                'promo_code' =>  $this->input->post('promo_code'),
                'customer_identifier'=>'1',
                'integration_type'=>'iframe_normal');
                
           foreach ($data as $key=>$value)
           {
                $merchant_data.=$key.'='.$value.'&';
            }
        $encrypted_data=encrypt1($merchant_data,$working_key);
        $data1['encrypted_data']=$encrypted_data;
          $this->load->view('header');
          $this->load->view('summary',$data);
          //$this->load->view('ccavRequestHandler',$data1);
          $this->load->view('footer');
       }
	}

	public function payment()
	{	
		
		$details['query']=$this->user->showcart($this->session->userdata('uid'));
		$details['category']=$this->user->showcategory();
		$details1=$this->user->deliveryadd($this->session->userdata('uid'));
		$data['fname'] = $details1[0]->fname;
		$data['lname'] = $details1[0]->lname;
		$data['country'] = $details1[0]->country;
		$data['state'] = $details1[0]->state;
		$data['town'] = $details1[0]->town;
		$data['addr'] = $details1[0]->addr;
		$data['mob'] = $details1[0]->mob;
		$data['pin'] = $details1[0]->pin;
		$this->load->view('header',$details);
		$this->load->view('checkout1',$data);
		
	}
	
	 public function remove_cart()
    {
    	$uid=$this->session->userdata('uid');
    	$id=$this->input->post('postid');
		$this->db->delete('cart', array('id'=>$id,
                                          'uid'=>$uid));
    }

    public function pay_success()
    {
    	$this->load->view('header');
		$this->load->view('success');
    }

	
		
}