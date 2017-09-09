<?php
/**
 * 专题--PHPRPC支持 测试
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/9 0009
 * Time: 下午 3:57
 */

namespace Home\Controller;


use Think\Controller\RpcController;

class ServerController extends RpcController {
    protected $allowMethodList = array('test1', 'test2');
    public function test1(){
        return 'test11111';
    }

    public function test2(){
        return 'test2asdg';
    }

    public function test3(){
        return 'test3';
    }

    public function test4(){
        return 'test4';
    }
}