<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth_model extends CI_Model{  
    
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserDtails()   {
    	if(isset($_POST["username"]) && isset($_POST["password"])) {   
	    	$username=$_POST["username"];
	    	$password=$_POST["password"];
			$query = "SELECT * FROM one_users WHERE one_users.one_username='".$username."' and one_users.one_password='".md5($password)."'";
			$result = array();
			$result = $this->db->query($query) -> result();
		  	if(isset($result[0])) {
		 		return $result[0];
		 	}
			 else {
		 		return null;
		 	}	

	 	} 
		else{
		 	return null;
		 }         
	}
	
}
