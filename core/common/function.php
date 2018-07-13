<?php
function p($var){
    if (is_bool($var)){
        var_dump($var);
    }elseif(is_null($var)){
        var_dump(NULL);
    }else{
        echo "<pre style='position: relative;z-index: 1000;padding: 10px;border-radius: 5px;
            background: #f5f5f5;border: 1px solid #aaa;font-size: 14px;line-height: 18px;
            opacity: 0.9;-webkit-opacity:0.9;-moz-opacity: 0.9;-o-opacity: 0.9;'>"
            .print_r($var,true)."</pre>";
    }
}
/**
* @param $name 变量对应值
* @param $default 默认值
* @param $filter 过滤方法 ‘int’
 **/
function post($name,$default=false,$filter=false){

    if(isset($_POST[$name])){
        if($filter){
            switch ($filter){
                case 'int':
                    if(is_numeric($_POST[$name])){
                        return $_POST[$name];
                    }else{
                        return $default;
                    }
                    break;
                default:;
            }
        }else{
            return $_POST[$name];
        }
    }else{
        return  $default;
    }
}

/**成功跳转**/
function success($url){
    header('location:'.$url);
    exit();
}
