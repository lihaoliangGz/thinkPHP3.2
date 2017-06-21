<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 测试绑定控制器到入口文件
 */

namespace Admin\Controller;
use Think\Controller;
/**
 * Description of TestController
 *
 * @author Administrator
 */
class TestController extends Controller{
    //put your code here
    public function test(){
        echo "绑定test控制器到入口文件";
    }
            
}
