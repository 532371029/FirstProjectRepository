<?php
namespace app\controller;

use app\model\msgbordModel;


class indexController extends baseController
{
    public function index(){
        $model=new msgbordModel();
        $lists=$model->lists();
        $this->assign('msgLists',$lists);
        $this->display("index.html");
    }

    public function add(){

        $this->display("add.html");
    }

    public function save(){
        $data['title']=post('title');
        $data['content']=post('content');
        $data['createtime']=time();

        $model=new msgbordModel();
        $res=$model->add($data);
        if($res){
            success('index.html');
        }else{
          p('留言添加失败');
        }
    }
}