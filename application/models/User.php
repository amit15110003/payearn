<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        $this->tableName = 'user';
		$this->primaryKey = 'id';
    }
	//user
	function insert_user($data)
    {
    	$data['u_visit'] = date("Y-m-d H:i:s");
		return $this->db->insert('user', $data);
	}
	function get_user($u_mail,$u_pass)
	{
		$this->db->where('u_mail', $u_mail);
		$this->db->where('u_pass', md5($u_pass));
        $query = $this->db->get('user');
		return $query->result();
	}
	function get_user_by_id($id)
	{
		$this->db->where('u_id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	//address
	public function deliveryadd($u_id)
	{	
		$this->db->where('u_id',$u_id);
		$query=$this->db->get('delivery');
		return $query->result();
	}
	function insert_delivery($data,$u_id,$id)
    {
		 $this->db->where('u_id',$u_id);
		 $this->db->where('id',$id);
	   $q = $this->db->get('delivery');

	   if ( $q->num_rows() > 0 ) 
	   {
	      $this->db->where('u_id',$u_id);
	     return  $this->db->update('delivery',$data);
	   } else {
	      $this->db->set('u_id', $u_id);
	      return $this->db->insert('delivery', $data);
	   }
	}
	//subscribe
	function insert_subscriber($email)
    {$data = array('s_mail'=>$email);
		return $this->db->insert('subscribe', $data);
	}
}?>