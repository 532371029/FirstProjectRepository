<?php
namespace core;
use core\lib\route;
use core\lib\log;


class core{

    static public  $classMap=array();
    static public  $assign;
    static public  $display;

    static public function run(){
        /*日志开启*/
        log::init();

        /*实例路由*/
        $route=new route();

        $controller=$route->ctrl;//控制器
        $action=$route->action;//方法

        $controllerFile = APP.'/controller/'.$controller.'controller.php';//控制器文件
        $controllerPath = '\\'.MODULE.'\controller\\'.$controller.'controller';//控制器路径

        if(is_file($controllerFile)){

            include $controllerFile;//引入控制器文件

            $ctrl=new $controllerPath();//实例控制器
            $ctrl->$action();

            log::log('controller:'.$controller.'~'.'action:'.$action,'route');

        }else{
            throw new \Exception('没有控制器:'.$ctrlClass);
        }
    }

    static public function load($className){
        /**
         * 要做的工作
         * 1：将 \ 替换为  /
         * 2：拼接类文件，路径
         *
         * 示例：
         * new \core\route();
         * $class ='\core\route';
         * DIYKJ./core/route.php;
         *
         */

        if(isset(self::$classMap[$className])){
            return  true;
        }else{
            $className=str_replace('\\','/',$className);
            $file=DIYKJ.'/'.$className.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$className]=$className;
            }else{
               return false;
            }
        }

    }

    public function assign($name , $value){
        self::$assign[$name] = $value;
    }

    public function display($filePath){

        $filePath=APP.'/view/'.$filePath;

        if(is_file($filePath)){


            $loader = new \Twig_Loader_Filesystem(APP.'/view');
            $twig = new \Twig_Environment($loader, array(
                'cache' => DIYKJ.'/runtime/cache',
                'debug'=>DEBUG,
            ));
            $template = $twig->loadTemplate('index.html');

            $template->display(self::$assign ? self::$assign : array());

        }
    }
}