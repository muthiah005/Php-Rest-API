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

class kits extends REST_Controller
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
      $this->load->model('kits_model');

    }
    

  public function saveKit_post() {
    $insert_id = $this->kits_model->saveKit($this->post());
    $this->returnApiResult( $insert_id );
  }


  public function updateKit_post()  {
    $update = $this->kits_model->updateKits($this->post());
    $this->returnApiResult( $update );

  }

  public function kitList_get()  {
    $kits = array();
    $kits = $this->kits_model->getAllKits();
    $this->returnApiResult( $kits );
  }

  public function getOneKit_get($kitId)  {
    $kits = array();
    $kits = $this->kits_model->getAllKits();
    $this->returnApiResult( $kits );
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

