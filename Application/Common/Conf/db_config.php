<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return array(
    'DB_CONFIG1'=>array(
        //'DB' =>"dbdbdb"//用于测试读取配置
        'DB_TYPE' =>'mysql',
        'DB_HOST' =>'localhost',
        'DB_USER' => 'root',
        'DB_PWD' => '',
        'DB_PORT' =>3306,
        //'DB_PREFIX' => 'sr_',//数据库前缀
        'DB_DEBUG'=>true,//数据库调试
        'DB_NAME' =>'db_test1',
        'DB_CHARSET' =>'utf8',
        //'DB_PARAMS'  =>array(PDO::ATTR_PERSISTENT=>TRUE),//设置长连接,非必须
    ),
    
    //分布式数据库支持,默认第一个数据库配置是主服务器的配置信息，负责写入数据。DB_MASTER_NUM参数支持多个主服务器写入
    //调用模型的CURD操作的话，系统会自动判断当前执行的方法的读操作还是写操作，
    //如果你用的是原生SQL，那么需要注意系统的默认规则： TODO 写操作必须用模型的execute方法，读操作必须用模型的query方法，否则会发生主从读写错乱的情况。
    'DB_CONFIG2' =>array(
        'DB_DEPLOY_TYPE' => 1, // 设置分布式数据库支持:0 集中式(单一服务器),1 分布式(主从服务器)
        'DB_TYPE' => 'mysql', //分布式数据库类型必须相同
        'DB_HOST' => '192.168.0.1,192.168.0.2',//即使想同id也需要重复定义，其他的参数如果存在相同的可以不用重复定义
        'DB_USER' => 'root',//
        'DB_PWD' => '',
        'DB_PORT' => 3306,//
        'DB_NAME' => 'doumu',
        'DB_CHARSET' => 'utf8',
        //'DB_RW_SEPARATE'=>true,//设置读写分类
    )
);

