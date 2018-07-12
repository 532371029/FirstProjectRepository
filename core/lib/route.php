<?php
namespace core\lib;

use core\lib\conf;

class route{
    public $ctrl;
    public $action;
    public function __construct()
    {
        /*xxx.com/index.php/index/index 抓取当前路径url
        *1.隐藏index.php
        *2获取url参数部分
        * 3.返回控制器和方法
        */
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
            /*将 /index/index => index/index再分别获取控制器和方法*/
            $path=$_SERVER['REQUEST_URI'];

            $arr_path=explode('/',trim($path,'/'));
           if(isset($arr_path[0])){
               $this->ctrl=$arr_path[0];
           }
           unset($arr_path[0]);
           if(isset($arr_path[1])){
               $this->action=$arr_path[1];
               unset($arr_path[1]);
           }else{
               $this->action=conf::get('ACTION','route');
           }

           /*获取url多余的参数部分转换成GET
           *index/index/id/1/name/2/age/12
           */
            $count=count($arr_path)+2;
            $i=2;
            while ($i< $count){
                if (isset($arr_path[$i+1])){
                    $_GET[$arr_path[$i]]=$arr_path[$i+1];
                }
                $i += 2;
            }
        }else{

            $this->ctrl=conf::get('CTRL','route');
            $this->action=conf::get('ACTION','route');
        }





    }
}