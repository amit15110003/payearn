<?php
class cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url', 'html','text','typography','date'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('user');
	}
	
	public function index()
	{
		$details['query']=$this->user->showcart($this->session->userdata('u_id'));
		$this->load->view('header');
		$this->load->view('cart',$details);
		$this->load->view('footer');
	}

	 public function remove_cart()
    {
    	$u_id=$this->session->userdata('u_id');
    	$id=$this->input->post('postid');
		$this->db->delete('cart', array('id'=>$id,
                                          'u_id'=>$u_id));
    }

    public function itemadd()
    {
    	$u_id=$this->session->userdata('u_id');
    	$id=$this->input->post('id');
    	$item=$this->input->post('item');
		$this->db->query('update cart set item="'.$item.'" where id="'.$id.'" and u_id="'.$u_id.'"');
    }
    function updatecart()
	{
         $data = array(
        'rowid' => $this->input->post('id'),
        'qty'   => $this->input->post('item')
	);
       $this->cart->update($data);
	}
	  public function cartadd()
	{	
		$u_id=$this->session->userdata('u_id');
		$postid=$this->input->post('id');
		$qty=$this->input->post('qty');
		$checkcart = $this->db->query('select * from cart 
			                            where p_id="'.$postid.'" 
			                            and u_id = "'.$u_id.'"');
		$resultcheckcart = $checkcart->num_rows();


		if($resultcheckcart == '0' ){
		$data=array('p_id'=>$postid,'u_id'=>$u_id,'item'=>$qty);
		$this->db->insert('cart',$data);
		}
		else if($resultcheckcart >='1' ){
			$data=$this->user->get_cart_qty($u_id,$postid);
    		$item1=$data[0]->item;
    		$item=$item1+1;
			$this->db->query('update cart set item="'.$item.'" where p_id="'.$postid.'" and u_id="'.$u_id.'"');
			}	
	}
	 public function cartadd1()
	{
	 
		$data = array(
        'id'  =>$this->input->post('id'),
        'qty'     => $this->input->post('qty'),
        'price'   => 39.95,
        'name'    => 'T-Shirt'
		);
		$this->cart->insert($data);
	

	}

	 public function wishlist()
	{
	$uid=$this->session->userdata('uid');
	$postid=$this->input->post('id');
	$checkcart = $this->db->query('select * from wishlist 
		                            where productid="'.$postid.'" 
		                            and uid = "'.$uid.'"');
	$resultcheckcart = $checkcart->num_rows();


	if($resultcheckcart == '0' ){
	$data=array('productid'=>$postid,'uid'=>$uid);
	$this->db->insert('wishlist',$data);
		echo '<script language="javascript">';
		echo 'alert("Successfully add to cart")';
		echo '</script>';
	}
	else{
		$this->db->delete('wishlist', array('productid'=>$postid,
										  'uid'=>$uid));
		echo '<script language="javascript">';
		echo 'alert("Already add to cart")';
		echo '</script>';
		}

	}
	function removecart($rowid) 
	{

                    // Destroy selected rowid in session.
			if ($rowid==="all"){
                       // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
                    // Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
                 // This will show cancle data in cart.
		redirect('cart');
		
	}
		
}