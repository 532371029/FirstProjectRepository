<?php
/*入口文件
1.定义常量
2.加载函数库
3，启动框架
*/
use core\core;

ini_set('date.timezone','Asia/Shanghai');

define('DIYKJ',realpath('./'));
define('CORE',DIYKJ.'/core');
define('APP',DIYKJ.'/app');
define('DEBUG',true);
define('MODULE','app');

/*引入自动加载类*/
include "vendor/autoload.php";

if(DEBUG){
    $whoops=new \Whoops\Run;
    $options=new \Whoops\Handler\PrettyPageHandler();
    $whoops->pushHandler($options);
    $whoops->register();
    ini_set('display_errors','on');
}else{
    ini_set('display_errors','off');
}


include CORE.'/common/function.php';

include CORE.'/core.php';

/*自动加载,当我们需要像这样new \core\route() 类并且当它不存在时PHP spl_autoload_register()方法会自动加载*/
spl_autoload_register('\core\core::load');

core::run();



