<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class authentication extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('auth_model');
		$this->load->library('session');
	}


	public function index()	{
		$this->data['title'] = "Login";
		$this->data['isLoggedIn'] = "false";
		$this->data['content'] = 'common/auth/login';
		$this->load->view('common/auth/template_admin',$this->data);
	}
	public function authlogin(){	
		echo "validate credentails here";		
		// $user = array();
		// $user = $this->auth_model->getUserDtails();
		// if($user != null)
		// {
		// 	$this->session->set_userdata('ten_user',$user);
		// }
		// else { 			
		// 	echo "eror handling";
		// }
	}

	public function dashboard(){	
		$this->data['isLoggedIn'] = "true";
		$this->data['title'] = "Dashboard";
		$this->data['content'] = 'common/auth/dashboard';
		$this->load->view('common/auth/template_admin',$this->data);	
	}
    public function logout ()
	 {
 		$this->session->unset_userdata('ten_user');
		$this->session->sess_destroy(); 
		redirect('','refresh');
	 }
	 


}