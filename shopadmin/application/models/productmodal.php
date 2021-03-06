<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productmodal extends CI_Model
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

	function get_members($id)
	{
		$this->db->where('a_id', $id);
        $query = $this->db->get('admin_login');
		return $query->result();
	}
	function get_product()
	{
        $query = $this->db->get('product');
		return $query->result();
	}
	function get_product_wid($wid)
	{   $this->db->where('p_warehouse',$wid);
        $query = $this->db->get('product');
		return $query->result();
	}
	function productbyid($p_id)
	{
		$this->db->where('p_id', $p_id);
        $query = $this->db->get('product');
		return $query->result();
	}
	function update_product($p_id,$data)
	{
		$this->db->where('p_id', $p_id);
		return $this->db->update('product', $data);
		
	}
	function add_product($data)
	{
		return $this->db->insert('product', $data);
	}

	function toggle_product($a_id,$status)
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

}?>