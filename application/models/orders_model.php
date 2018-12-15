<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class orders_model extends CI_Model{  
    
    public function __construct()
    {
        parent::__construct();
    }

   public function saveOrder($data)	{
		$query = $this->db->insert("one_Order", $data);
		return $this->db->insert_id();
	}
	public function updateOrder($data)	{
		$update_query = "UPDATE ".$this->__table." SET one_contact='".$data['one_contact']."' where user_id='".$data['user_id']."'";
		$result = $this->db->query($update_query);
		return ($result);
	}

	public function getAllOrder()	{
		$client_qry = "select one_name,one_contact,one_email from one_Order where status = 1";
		$query = $this->db->query($client_qry);
		return $query->result();
	}

	public function getOneUser($data){
		$client_qry = "select one_name,one_contact,one_email from one_Order where status = 1 and".$data['order_id'];
		$query = $this->db->query($client_qry);
		return $query->result();
	}
	
}
