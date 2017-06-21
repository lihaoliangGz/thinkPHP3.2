<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 测试配置的Controller
 * C方法:获取和设置配置参数 
 */

namespace Home\Controller;
use Think\Controller;
/**
 * Description of ConfigController
 *
 * @author Administrator
 */
class ConfigController extends Controller {
    //put your code here
    
    //读取配置,因为配置参数是全局有效的，因此C方法可以在任何地方读取任何配置，即使某个设置参数已经生效过期了。
    public function config_test() {
        $model = C('URL_MODEL');
        echo "$model", "\n";
        $default = C('my_config', null, 'default_config!!');
        echo "$default", "\n";
        //支持二维数组的读取
        $array1 = C('TRACE_PAGE_TABS.think');
        var_dump($array1);
        
        //读取扩展配置文件的配置
        //$ext=C('DB');
        //echo "$ext";
        
        //读取扩展配置文件的配置方式2
        $c = C('USER.USER_TYPE');
        var_dump($c);
    }

    //动态配置
    public function set_config_test() {
        C('URL_MODEL', 2);
        $model = C('URL_MODEL');
        echo "$model", "\n";
        //支持二维数组的配置
        C('TRACE_PAGE_TABS.think', '流程111');
        $array1 = C('TRACE_PAGE_TABS.think');
        var_dump($array1);
        
        //批量配置
        $config=array('ABC'=>'abc','ED'=>'ed');
        C($config);
        echo C('ABC');
        echo C('ED');
        var_dump(dirname(__FILE__));
        
    }

}
