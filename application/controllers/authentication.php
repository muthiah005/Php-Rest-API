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

		$this->data['navigation'] = "common/navigation";
		$this->data['footer'] = "common/footer";
		$this->data['title'] = "Login";
		$this->data['content'] = 'auth/login';
		$this->load->view('common/template_admin_login',$this->data);
	}
	public function authlogin(){			
		$user = array();
		$user = $this->auth_model->getUserDtails();
		if($user != null)
		{
			$this->session->set_userdata('ten_user',$user);
		}
		else { 			
			echo "eror handling"
		}
	}
    public function logout ()
	 {
 		$this->session->unset_userdata('ten_user');
		$this->session->sess_destroy(); 
		redirect('','refresh');
	 }
	 


}