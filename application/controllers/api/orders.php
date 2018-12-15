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

class orders extends REST_Controller
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
        $this->load->model('orders_model');

    }



    public function saveOrder_post() {
    
    $insert_id = $this->orders_model->saveOrders($this->post());

    $this->returnApiResult( $insert_id );

  }


  public function editOrder_post() {
    
    $data_arr = $this->post();
    $orderId= $this->session->userdata('ten_user')->orderId;
    $data_arr['orderId'] = $orderId;
    $insert_id = $this->orders_model->updateOrders($data_arr);

    $this->returnApiResult( $insert_id );

  }
  public function updateOrder_post()  {
    
    $update = $this->orders_model->updateOrders($this->post());
    $this->returnApiResult( $update );

  }
 
  public function getOneOrder_get()  {
    $users = array();
    $users = $this->orders_model->getOneOrder($this->get('order_id'));
    $this->returnApiResult( $users );
  }


    public function orderList_get()  {
    	$orders = array();
    	$orders = $this->orders_model->getAllOrders();
      $this->returnApiResult( $orders );
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

