<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        echo U('User/login');
        echo('<br/>');
        echo 'login';
    }
}