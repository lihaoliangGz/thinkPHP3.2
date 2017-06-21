<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return array(
    'DB_CONFIG1'=>array(
        
    ),
    
    //分布式数据库支持
    'DB_CONFIG2' =>array(
        'DB_DEPLOY_TYPE' => 1, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
        'DB_TYPE' => 'mysql',
        'DB_HOST' => '192.168.0.1,192.168.0.2',//即使想同id也需要重复定义
        'DB_USER' => 'root',//
        'DB_PWD' => '',
        'DB_PORT' => 3306,//
        'DB_NAME' => 'doumu',
        'DB_CHARSET' => 'utf8',
    )
);

