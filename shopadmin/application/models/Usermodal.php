<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usermodal extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    

	
	function get_members($id)
	{
		$this->db->where('a_id', $id);
        $query = $this->db->get('admin_login');
		return $query->result();
	}
	function get_user()
	{
        $query = $this->db->get('user');
		return $query->result();
	}
	function get_user_wid($wid)
	{	
		$this->db->where('u_wid', $wid);
        $query = $this->db->get('user');
		return $query->result();
	}
	function add_user($data)
	{
		return $this->db->insert('user', $data);
	}
	function update_user($u_id,$data)
	{
		$this->db->where('u_id', $u_id);
		return $this->db->update('user', $data);
		
	}
	function userbyid($u_id)
	{
		$this->db->where('u_id', $u_id);
        $query = $this->db->get('user');
		return $query->result();
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



}?>