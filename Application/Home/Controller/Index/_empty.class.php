<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 操作绑定到类后,空操作测试
 * 
 */

namespace Home\Controller\Index;
use Think\Controller;
/**
 * Description of _empty
 *
 * @author Administrator
 */
class _empty extends Controller{
    //put your code here
    
    public function run(){
        echo '执行Index控制器的'.ACTION_NAME.'操作';
    }
}
