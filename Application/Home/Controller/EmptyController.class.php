<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;
use Think\Controller;

/**
 * Description of EmptyController
 * 空控制器，指当系统找不到请求的控制器名称的时候，系统会尝试定位空控制器(EmptyController)，利用这个机制我们可以用来定制错误页面和进行URL的优化
 * 空控制器和空操作还可以同时使用，用以完成更加复杂的操作。
 * @author Administrator
 */
class EmptyController extends Controller{
    //put your code here
    public function index(){
        $cityName=CONTROLLER_NAME;
        $this->city($cityName);
        
    }
    
    protected function city($name) {
        echo "空控制器测试:$name", "\n";
    }
    
    //空控制器和空操作结合使用:
    public function _empty($name){
        echo "空控制器和空操作结合使用:",$name;
    }

}
