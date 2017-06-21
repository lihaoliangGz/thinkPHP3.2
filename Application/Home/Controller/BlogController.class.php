<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;

use Think\Controller\RestController;

/**
 * Description of BlogController
 *
 * @author Administrator
 */
class BlogController extends RestController {

    protected $allowType = array('html');

    //put your code here
    public function rest_test() {
        echo "测试rest\n\n\n";
        echo $this->_method, "\n";
        echo $this->_type, "\n";
        $var = "爱干净氨基酸的刻录机啊地方价格卡三等奖";
        $this->response($var, 'xml');
    }

}
