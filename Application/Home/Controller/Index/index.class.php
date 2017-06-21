<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 操作绑定到类测试
 * http://serverName/Home/Index/index，设置后，控制器文件位置改为Application/Home/Controller/Index/index.class.php
 * 
 */

namespace Home\Controller\Index;

use Think\Controller;

/**
 * Description of index
 *
 * @author Administrator
 */
class index extends Controller {
    //当设置操作方法绑定到类后,前置和后置操作的定义有所改变
    public function _before_run() {
        echo 'before_' . ACTION_NAME,"\n";
    }

    //会默认执行run方法
    public function run() {
        echo '执行Index控制器的run操作',"\n";
    }
    
     public function _after_run() {
        echo 'after_' . ACTION_NAME,"\n";
    }

}
