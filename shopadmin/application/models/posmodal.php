<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posmodal extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	function get_product()
	{
        $query = $this->db->get('product');
		return $query->result();
	}
	public function productfilter($keyword)
	{ 	
		$this->db->where('p_name', $keyword);
		$query=$this->db->get('product');
		return $query->result();
	}
	public function get_product_by_id($p_id)
	{	
		$this->db->where('p_id', $p_id);
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		return $query->result();
	}
	function orderdetails($data)
	{
        return $this->db->insert('orderpos',$data);
	}

	public function orderdetails_txnid($txnid)
	{	
		$this->db->where('txnid', $txnid);
		$query=$this->db->get('orderpos');;
		return $query->result();
	}

}?>