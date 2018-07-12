<?php
namespace core\lib\driver\log;

use core\lib\conf;

class File{
    static public $path;
    public function __construct()
    {
        $conf=conf::get('OPTION','log');
        self::$path=$conf['PATH'].date('Y-m-d H').'\\';
    }

    public function log($message,$file='log'){
        /*
         * 1.存储位置存在否，不存在创建
         * 2.写入日志
         * */
        if(!is_dir(self::$path)){
            mkdir(self::$path,'777',true);
        }
        $filePath=self::$path.$file.'.txt';

        return file_put_contents($filePath,date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
    }

}