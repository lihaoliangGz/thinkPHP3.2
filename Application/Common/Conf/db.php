<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 扩展配置文件
 * 
 */

//数据库配置信息
return array(
    //'DB' =>"dbdbdb"//用于测试读取配置
    'DB_TYPE' =>'mysql',
    'DB_HOST' =>'localhost',
    'DB_USER' => 'root',
    'DB_PWD' => '',
    'DB_PORT' =>3306,
    //'DB_PREFIX' => 'sr_',//数据库前缀
    'DB_DEBUG'=>true,//数据库调试
    'DB_NAME' =>'doumu',
    'DB_CHARSET' =>'utf8',
    //'DB_PARAMS'  =>array(PDO::ATTR_PERSISTENT=>TRUE),//设置长连接,非必须
    
);

