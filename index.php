<?php
/*入口文件
1.定义常量
2.加载函数库
3，启动框架
*/

define('DIYKJ',realpath('./'));
define('CORE',DIYKJ.'/core');
define('APP',DIYKJ.'/app');
define('DEBUG',true);

if(DEBUG){
    ini_set('display_errors','on');
}else{
    ini_set('display_errors','off');
}

include CORE.'/common/function.php';
p('DOYKJ');


