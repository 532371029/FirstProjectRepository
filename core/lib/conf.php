<?php
namespace core\lib;

class conf{
    static public $conf=array();

    /*
     * @param name参数名称，
     * @file文件名
     * */
    static public function get($name,$file){
        /*
         * 1.查看配置文件是否存在
         * 2.参看配置是否存在
         * 3.缓存配置
        */
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }else{
            $path=DIYKJ.'\core\config\\'.$file.'.php';
            if(is_file($path)){
                $conf=include $path;
                if(isset($conf[$name])){
                    self::$conf[$file]=$conf;
                    return $conf[$name];
                }else{
                    throw new \Exception('配置不存在'.$name);
                }
            }else{
                throw new \Exception('文件不存在'.$file);
            }
        }
    }

    static public function all($file){
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }else{
            $path=DIYKJ.'\core\config\\'.$file.'.php';
            if(is_file($path)){
                $conf=include $path;
                self::$conf[$file]=$conf;
                return $conf;
            }else{
                throw new \Exception('文件不存在'.$file);
            }
        }
    }
}