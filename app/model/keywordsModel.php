<?php
namespace app\model;

use core\lib\model;


class keywordsModel extends model{

    static public $table="keywords";

    /*获取整张表的信息*/
    public function lists($columns="*"){
        $res=$this->select(self::$table,$columns);
        return  $res;
    }

    /*获取指定id的得信息*/
    public function getOne($id,$columns="*"){
        $res=$this->get(self::$table,$columns,array("id"=>$id));
        return  $res;
    }

    /*更新一条记录*/
    public function setOne($where,$data){
        return $this->update(self::$table,$data,$where);
    }

    /*删除一条记录*/
    public function delOne($where){
        return $this->delete(self::$table,$where);
    }

    /*增加记录可批量插入*/
    public function add($data){
        return $this->insert(self::$table,$data);
    }
}