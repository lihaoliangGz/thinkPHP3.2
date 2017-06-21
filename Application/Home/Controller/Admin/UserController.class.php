<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 2级控制器中的UserController
 * 
 */

/**
 * Description of UserController
 *
 * @author Administrator
 */
namespace Home\Controller\Admin;
use Think\Controller;
class UserController extends Controller{
    public function user(){
        echo "Controller.Admin的UserController控制器的user操作";
    }
}
