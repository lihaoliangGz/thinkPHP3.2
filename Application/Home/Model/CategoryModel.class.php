<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Home\Model;
use Think\Model;

class CategoryModel extends Model{
    //protected $dbName='doumu';//设置数据库名称
    //protected $tableName='admin_user';
    protected $trueTableName='admin_user';
    protected $fields=array('id','username',
        'password',
        'status',   //定义字段
        //'_type'=>array('id' => 'bigint', 'username' => 'varchar', 'email' => 'varchar', 'age' => 'int')    //定义字段类型
        );

    //字段映射
    protected $_map = array(
        'name'=>'username',// 把表单中name映射到数据表的username字段
        'pass'=>'password',// 把表单中的pass映射到数据表的password字段
    );
    
    //设置复合主键
    //protected $pk = array('user_id', 'lession_id');

    // 命名范围
    protected $_scope = array(
        'normal' => array(
            'where'=>array('status=1'),
        ),


    );

   
}
