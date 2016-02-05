<?php
#defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller9.php');

class Rest_test extends REST_Controller {

    public function index_get(){
      echo 'get';
    }

    public function index_post(){
      echo 'post';
    }

    public function user_get($id){
      $arr = array('user id' => $id,'user name' =>'foo');
      echo json_encode($arr);
    }

}
