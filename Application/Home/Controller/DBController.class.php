<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 测试模型的控制器
 * 
 */

namespace Home\Controller;
use Think\Controller;
/**
 * Description of DBController
 *
 * @author Administrator
 */
class DBController extends Controller{
    //实例化模型类测试
    //M和D这两个方法的区别在于M方法实例化模型无需用户为每个数据表定义模型类，如果D方法没有找到定义的模型类，则会自动调用M方法。
    public function instantiation(){
        $User=new \Home\Model\CategoryModel();//通过传统方法实例化模型类
        $select0 = $User->select();
        var_dump($select0);
        
        //测试doumu数据库下的表
        $d = D('Category');//通过D方法实例化模型类,D方法支持KualaLumpur模块调用
        $select = $d->select();
        var_dump($select);
        
        $m = M('admin_user');
        $select1 = $m->select();
        var_dump($select1);
        
        $m = M('city');
        $select1 = $m->select();
        //var_dump($select1);
        
        
        //跨库操作, 实例化mysql数据库下的db表
        $m0 = M('mysql.db');
        $select2 = $m0->select();
        $dbFields = $m0->getDbFields();//获取字段信息
        var_dump($dbFields);
        var_dump($select2);
        
        echo "=============================================================\n\n";
        
        //实例化空模型类
        //仅仅是使用原生SQL查询的话，不需要使用额外的模型类，实例化一个空模型类即可进行操作了
        //$model=new \Think\Model();
        $model=M(); //等效
        $query = $model->query('SELECT * FROM admin_user');
        var_dump($query);
        
        //切换数据库
        
       
        
    }
    
    
    
    
    
    
    
    
    
    
    
    //空操作
    public function _empty($name) {
        echo "空操作测试，name:", $name;
    }

}
