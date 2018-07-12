<?php
namespace app\controller;

use app\model\keywordsModel;
use core\core;

class indexController extends core
{
    public function index(){

        $model=new keywordsModel();

        /*$res=$model->lists();
        dump($res);*/

        /*$columns=array("words","replaywords");
        $ret=$model->getOne("1",$columns);
        dump($ret);*/

        /*$data=array(
            "words"=>"PHP框架",
            "replaywords"=>"JetPHP"
        );
        $where=array("id"=>2);
        $con=$model->setOne($where,$data);
        dump($con);*/

        /*$where=array("id"=>5);
        $result=$model->delOne($where);
        dump($result);*/

        $data=[
            [
                "words"=>"轻量化PHP框架",
                "replaywords"=>"JetPHP"
            ],
            [
                "words"=>"最简洁的PHP框架JetPHP",
                "replaywords"=>"欢迎使用JetPHP"
            ]
        ];
        $con=$model->add($data);
        dump($con);
    }
}