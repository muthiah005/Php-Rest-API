<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		//$data['content'] = 'common/user_home';
		$data['content'] = 'common/dashboard_landing';
		$this->load->view('common/template_user.php',$data);
	}
}
