<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 模板测试的控制器
 * 
 */

namespace Home\Controller;
use Think\Controller;
/**
 * Description of Tmpl2Controller
 *
 * @author Administrator
 */
class Tmpl2Controller extends Controller{
    
    //变量输出
    public function tmpl_test(){
        //字符串输出
        $name='ThinkPHP';
        $this->assign('name',$name);
        $this->display();
        
        //数组输出
        $array['name']='THINKPHP';
        $array['email']='thinkphp@qq.com';
        $this->assign('array',$array);
        $this->display();
        
        //对象输出:
       
    }
    
    //在模板中,系统变量输出
    public function tmpl_system(){
        $this->display();
    }
    
    //对模板输出变量使用函数 和 默认值输出
    public function tmpl_function(){
        $num=13800138000;
        $this->assign('num',$num);
        $this->assign('create_time', time());
        $this->assign('str','字符村sjdaogj');
        $this->display();
    }
    
    //使用运算符
    public function tmpl_op(){
        $num=13;
        $this->assign('num',$num);
        $this->assign('status',FALSE);
        $this->display();
    }
    
    //模板继承:
    public function tmpl_extends(){
        $this->assign('title','模板继承的字模板');
        $this->display();
    }
    
    //包含文件(include)
    public function tmlp_include(){
        $this->display();
    }
    
    //原样输出和模板注释:
    public function tmlp_literal(){
        $this->display();
    }
    
    //模板布局(需配置开启LAYOUT_ON 参数)第一种方式：全局配置方式
    public function tmlp_layout(){
        $this->display();
    }
            
    //模板布局第二种方式:模板标签方式
    public function tmlp_layout2(){
        $this->display();
    }
    
    //模板布局第三种方式:使用layout控制模板布局
    public function tmlp_layout3(){
        //layout('layout');
        //layout(false); // 临时关闭当前模板的布局功能(当使用第一种布局的时候)
        $this->display();
    }
    
    //模板替换
    public function tmlp_replace(){
        
    }
    
    
    
    
    //内置标签=====================================================
    //内置标签volist:
    public function tmlp_tag_volist(){
        $m = M('admin_user');
        $list = $m->select();
        $this->assign('list',$list);
        $this->display();
        
    }
    
    //内置标签foreach:
    public function tmlp_tag_foreach(){
         $m = M('goods_type');
        $list = $m->select();
        var_dump($list);
        $this->assign('list', $list);
        $this->display();
    }
    
     //内置标签for:
    public function tmlp_tag_for() {
       
        $this->display();
    }

     //内置标签switch:
    public function tmlp_tag_switch() {

        $this->display();
    }
    
    //内置标签 比较:
    public function tmlp_tag_compare() {
        $this->assign('name','value');
        $this->assign('num',5);
        $this->display();
    }
    
    //内置标签 范围判断:
    public function tmlp_tag_between(){
        $this->assign('id',1);
        $this->display();
    }
    
    //内置标签 if:
    public function tmlp_tag_if() {
        $this->assign('name' ,1);
        $this->display();
    }
    
    //内置标签 present
    public function tmlp_tag_present(){
        $this->assign('name','名字');
        $this->display();
    }
    
    //内置标签empty:
    public function tmlp_tag_empty(){
        $this->assign('name','name');
        $this->display();
    }
    
     //内置标签defined:
    public function tmlp_tag_defined() {
        $this->display();
    }

      //内置标签assign:
    public function tmlp_tag_assign() {
        $this->display();
    }
    
    //内置标签define:
    public function tmlp_tag_define(){
        $this->display();
    }
    
       //内置标签 嵌套:嵌套层次是由标签库中的标签定义的时候的level属性决定的。
    public function tmlp_tag_nest() {
        $this->display();
    }
    
    //内置标签 import:
    public function tmlp_tag_import(){
        $this->display();
    }
    
    //内置标签,使用PHP代码
    public function tmlp_tag_php(){
        $this->display();
    }

}
