<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 操作绑定到类后,空控制器测试
 * 
 */

/**
 * Description of index
 *
 * @author Administrator
 */
namespace Home\Controller\_empty;
use Think\Controller;
class index extends Controller{
    //put your code here
    public function run(){
        echo "执行".CONTROLLER_NAME.'控制器的'.ACTION_NAME."操作","\n";
    }
}
