<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        //$this -> display();
        //return '{a:1,b:2}';
        $callback = $_GET['callback'];

        echo $callback.'('.json_encode(array('jsonObj'=>'456')).')';
    }
    public  function userinfo(){
        $user_info= new \Model\GoodsModel();
        show_bug($user_info);
    }
    public function _empty(){
        echo '<p>404</p>';
    }
}