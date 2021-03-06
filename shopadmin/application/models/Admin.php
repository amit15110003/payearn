<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    function adminlogin($email, $pwd)
	{
		$this->db->where('a_mail', $email);
		$this->db->where('a_pass', md5($pwd));
        $query = $this->db->get('admin_login');
        $data['a_lastseen'] = date("Y-m-d H:i:s");
		$update = $this->db->update('admin_login',$data);
		return $query->result();
	}

	function insert_admin($data)
    {
    	$data['a_created'] = date("Y-m-d H:i:s");
		return $this->db->insert('admin_login', $data);
	}

	function update_admin($id,$data)
	{
		$this->db->where('a_id',$id);
		return $this->db->update('admin', $data);
	}
	
	function update_admin_login($id,$logindata)
	{
		$this->db->where('a_id',$id);
		return $this->db->update('admin_login', $logindata);
	}

	function get_admin($id)
	{
		$this->db->where('a_id', $id);
        $query = $this->db->get('admin');
		return $query->result();
	}

	function get_admin_login($id)
	{
		$this->db->where('a_id', $id);
        $query = $this->db->get('admin_login');
		return $query->result();
	}

	function get_members()
	{
        $query = $this->db->get('admin_login');
		return $query->result();
	}

	function add_member($data)
	{
		return $this->db->insert('admin_login', $data);
	}
	function update_member($a_id,$data)
	{
		$this->db->where('a_id', $a_id);
		return $this->db->update('admin_login', $data);
		
	}
	function memberbyid($a_id)
	{
		$this->db->where('a_id', $a_id);
        $query = $this->db->get('admin_login');
		return $query->result();
	}


	function toggle_design($a_design,$status)
	{
		$this->db->where('a_design', $a_design);
		$data['status'] = $status;
		return $this->db->update('admin_login', $data);
	}
	function toggle_member($a_id,$status)
	{
		$this->db->where('a_id', $a_id);
		$data['status'] = $status;
		return $this->db->update('admin_login', $data);
	}

	function update_pass($id,$logindata)
	{
		$this->db->where('a_id',$id);
		return $this->db->update('admin_login', $logindata);
	}
	function get_warehouse()
	{
        $query = $this->db->get('warehouse');
		return $query->result();
	}
	function add_warehouse($data)
	{
		return $this->db->insert('warehouse', $data);
	}
	function toggle_warehouse($w_id,$w_status)
	{
		$this->db->where('w_id', $w_id);
		$data['w_status'] = $w_status;
		return $this->db->update('warehouse', $data);
	}
	function get_category()
	{
        $query = $this->db->get('category');
		return $query->result();
	}
	function add_category($data)
	{
		return $this->db->insert('category', $data);
	}
	function toggle_category($c_id,$c_status)
	{
		$this->db->where('c_id', $c_id);
		$data['c_status'] = $c_status;
		return $this->db->update('category', $data);
	}
	function get_order()
	{	$this->db->order_by("order_id","desc");
                $query = $this->db->get('orderpos');
		return $query->result();
	}
	function get_order_wid($wid)
	{	
		$this->db->where('o_wid', $wid);
		$this->db->order_by("order_id","desc");
                $query = $this->db->get('orderpos');
		return $query->result();
	}
	function get_orderid($id)
	{	
		$this->db->where('order_id', $id);
        $query = $this->db->get('orderpos');
		return $query->result();
	}
	public function get_product_id($id)
	{	
		$this->db->where('p_id', $id);
		$query=$this->db->get('product');
		return $query->result();
	}

	function get_order_filter($s,$e)
	{	$this->db->where('o_time >=', $s);
		$this->db->where('o_time <=', $e);
        $query = $this->db->get('orderpos');
		return $query->result();
	}
	function get_order_filterd($o)
	{	$this->db->where('o_time =',$o);
        $query = $this->db->get('orderpos');
		return $query->result();
	}
	function countproduct_wid($wid)
	{
		$this->db->select_sum('p_id');
		$this->db->where('p_warehouse', $wid);
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countproduct()
	{
		$this->db->select_sum('p_id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countsell($date,$wid)
	{
		$this->db->select_sum('order_id');
		$this->db->where('o_time =', $date);
		$this->db->where('o_wid', $wid);
	    $this->db->from('orderpos');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countuser()
	{
		$this->db->select_sum('u_id');
	    $this->db->from('user');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
}?>