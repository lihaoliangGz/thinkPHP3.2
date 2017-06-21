<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * 
 */

namespace Home\Controller;
use Think\Controller\RpcController;

/**
 * Description of ServerController
 *
 * @author Administrator
 */
class ServerController extends RpcController {
      protected $allowMethodList = array('test1','test2');

    //put your code here

    public function test1() {
        echo "test1";
        return 'test1';
    }

    public function test2() {
        echo "test2";
        return 'test2';
    }

    public function test3() {
        echo "test3";
        return 'test3';
    }

}
