<?php
/*
 * 1.日志得存储方式（文件，数据库，内存）
 * 2.写日志
 */

namespace core\lib;
use core\lib\conf;

class log{
    static public $class;
    static public function init(){
        /*1.确定我们得存储方式 */
        $driver=conf::get('DRIVER','log');
        $class='\core\lib\driver\log\\'.$driver;
        self::$class = new $class;
    }

    static public function log($msg,$file='log'){
        self::$class->log($msg,$file);
    }
}