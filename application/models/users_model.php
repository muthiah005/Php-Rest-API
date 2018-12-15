<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class users_model extends CI_Model{  

	public function __construct()
	{
		parent::__construct();
	}

	public function saveUsers($data)	{

		$query = $this->db->insert("one_users", $data);
		return $this->db->insert_id();
	}
	public function updateUsers($data)	{
		$update_query = "UPDATE ".$this->__table." SET one_contact='".$data['one_contact']."' where one_user_id='".$data['user_id']."'";
		$result = $this->db->query($update_query);
		return ($result);
	}

	public function getAllUsers()	{
		$users = "select one_contact_person,one_email,one_name from one_users where one_user_status = 1 and one_createdby = 1";
		$query = $this->db->query($users);
		return $query->result();
	}

	public function getOneUser($userId){
		$client_qry = "select one_contact_person,one_email,one_name from one_users where one_user_status = 1 and one_user_id =".$userId;
		$query = $this->db->query($client_qry);
		return $query->result();
	}

	public function removeOneUser($userId){
		$update_query = "UPDATE one_users SET one_user_status = 0 where one_user_id=".$userId;
		$result = $this->db->query($update_query);
		return ($result);
	}

	
	
}
