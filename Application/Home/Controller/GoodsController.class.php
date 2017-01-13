<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function showlist(){
        //使用 数据模型 model
        //$goods= new \Model\GoodsModel();
        $goods = D('Goods');
        $info = $goods -> select();
        /*foreach($info as $k => $v){
            echo $v['name'].'<br>';
        }*/
        $callback = $_GET['callback'];

        echo $callback.'('.json_encode($info).')';
        //show_bug($info);

        /*$user_info= new \Model\UserModel();
        show_bug($user_info);*/
    }
    public  function add(){
        $goods = D('goods');
        $ar = array(
            'name'=>'早餐奶',
            'age'=>'13'
        );
        $rs = $goods -> add($ar);
        show_bug($rs);
    }
}