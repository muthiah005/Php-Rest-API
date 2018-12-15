<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products_model extends CI_Model{  
    
    public function __construct()
    {
        parent::__construct();
    }

    public function saveProducts(){
    	$query = $this->db->insert("one_products", $data);
		return $this->db->insert_id();
    }

    public function updateProducts(){
    	$update_query = "UPDATE ".$this->__table." SET one_name='".$data['one_contact']."' where one_product_id='".$data['one_product_id']."'";
		$result = $this->db->query($update_query);
		return ($result);
    }

    public function getAllProducts()   {
    	$products = "select * from one_products where one_product_status = 1";
		$query = $this->db->query($products);
		return $query->result();
	}

	public function getOneProduct($productId){
		$products = "select * from one_products where one_product_status = 1 and one_product_id=".$productId;
		$query = $this->db->query($products);
		return $query->result();
	}

	public function removeOneProduct($productId){
		$products = "UPDATE one_products SET one_product_status=0 where one_product_id=".$productId;
		$query = $this->db->query($products);
		return $query->result();
	}

	
	
}
