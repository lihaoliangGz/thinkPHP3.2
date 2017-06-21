<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 模板(视图)测试的控制器
 * 
 */

namespace Home\Controller;

use Think\Controller;

/**
 * Description of TmplController
 *
 * @author Administrator
 */
class TmplController extends Controller {

    //模板赋值
    public function tmpl_test() {
        $name = 'thinkPH';
        $this->assign('php', $name);

        $array['name'] = 'thinkPHP';
        $array['email'] = 'think@qq.com';
        $array['phone'] = '1233211234567';
        $this->assign($array);

        $this->display(); //渲染
    }

    //模板渲染
    public function tmpl_display() {
        $id = '123456';
        $this->assign('id', $id);
        //$this->display('edit');//指定输出到edit.html模板文件
        $this->display('Index:base'); //调用Index控制器下面的base模板(夸控制器调用)
        // $this->theme('blue')->display('User:edit');//调用blue主题下面的User控制器的edit模板。
        $this->display('Public:menu'); //即使项目里没有Public控制器和menu操作,也可以调用那些模板
        //$this->display('./Application/View/index');
    }

    //获取模板地址
    public function tmpl_get() {
        $t = T('Public/menu');
        echo "$t";
        $this->assign('id', 3213321);

        $this->display(T('Public/menu'));

        T('Public/menu');
        // 返回 当前模块/View/Public/menu.html
        T('blue/Public/menu');
        // 返回 当前模块/View/blue/Public/menu.html
        T('Public/menu', 'Tpl');
        // 返回 当前模块/Tpl/Public/menu.html
        T('Public/menu');
        // 如果TMPL_FILE_DEPR 为 _ 返回 当前模块/Tpl/Public_menu.html
        T('Public/menu');
        // 如果TMPL_TEMPLATE_SUFFIX 为.tpl 返回 当前模块/Tpl/Public/menu.tpl
        T('Admin@Public/menu');
        // 返回 Admin/View/Public/menu.html
        T('Extend://Admin@Public/menu');
    }

    //获取模板内容 和渲染内容(show())
    public function fetch_test(){
        $fetch = $this->fetch('edit');//fetch(‘模板文件’)模板文件的调用方法和display方法完全一样，区别就在于fetch方法渲染后不是直接输出，而是返回渲染后的内容
        var_dump($fetch);
        $this->show($fetch);//渲染内容
    }
    
}
