<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Home\Widget;
use Think\Controller;
/**
 * Description of CateWidget
 *
 * @author Administrator
 */
class CateWidget extends Controller{
//    public function menu($id,$name) {
//        echo 'menuWidget\n';
//        echo $id." : ".$name."\n";
//    }

    public function menu(){
         $menu = M('Cate')->getField('id,title');
        $this->assign('menu', $menu);
        $this->display('Cate:menu');
    }
}
