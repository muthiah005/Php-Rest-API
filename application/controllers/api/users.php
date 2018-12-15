<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Example
*
* This is an example of a few basic user interaction methods you could use
* all done with a hardcoded array.
*
* @package		CodeIgniter
* @subpackage	Rest Server
* @category	Controller
* @author		Phil Sturgeon
* @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class users extends REST_Controller
{
  public function __construct()
  {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
      die();
    }
    parent::__construct();

    $this->load->library('session');
  

  }

public function saveUsers_post() {
$insert_id = $this->users_model->saveUsers($this->post());
$this->returnApiResult( $insert_id );

}


public function updateUsers_post()  {
$update = $this->users_model->updateUsers($this->post());
$this->returnApiResult( $update );

}

/*
listing all the users 
*/
public function usersList_get()  {
  $users = array();
  $users = $this->users_model->getAllUsers();
  $this->returnApiResult( $users );
}

public function getOneUser_get($userId)  {
  $users =array();
  $users = $this->users_model->getOneUser($userId);
  $this->returnApiResult( $users );
}

public function removeOneUser_get($userId)  {
  $users =array();
  $users = $this->users_model->removeOneUser($userId);
  $this->returnApiResult( $users );
}

/*
* Helper function to return the result after the transaction
* Created a common method to get ride of redundant code
*/ 

private function returnApiResult($data)  {
  if($data) {
    $this->response( array('result' => 1 ,'status' => 'success', 'data' =>  $data  ), 200);
  }
  else {
    $this->response( array('result' => 0 ,'status' => 'fault', 'data' =>  0     ), 200);
  }
}
}

