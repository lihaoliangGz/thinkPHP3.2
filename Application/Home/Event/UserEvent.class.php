<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 事件控制器层下的事件控制器
 * 
 */

/**
 * Description of UserEvent
 *
 * @author Administrator
 */
class UserEvent {

    public function login() {
        echo 'login event';
    }

    public function logout() {
        echo 'logout event';
    }

}
