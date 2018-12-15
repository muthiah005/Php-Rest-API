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

	public function getAllOrders()	{
		$order = "select * from one_Order";
		$query = $this->db->query($order);
		return $query->result();
	}

	public function getOneOrder($orderId){
		$order = "select * from one_Order where one_order_id=".$orderId;
		$query = $this->db->query($order);
		return $query->result();
	}
	
}
