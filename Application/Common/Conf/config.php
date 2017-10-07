<?php

//全局配置文件
return array(
        //'配置项'=>'配置值'
        //模块部署:
//    'MODULE_ALLOW_LIST' => array('Home'), //允许访问的模块列表
//    'DEFAULT_MODULE' => 'Home', //默认模块
//    'MODULE_DENY_LIST' =>array('Home')
 
       
    //加载扩展配置文件:
    'LOAD_EXT_CONFIG' =>'user,db,db_config',
    //加载扩展配置文件,也可以改成这样
    //'LOAD_EXT_CONFIG'=> array('USER'=>'user','DB'=>'db'),//则最终获取用户参数的方式改成：C('USER.USER_AUTH_ID');
    
    'URL_MODEL' =>1,
    
//    'VAR_MODULE' => 'module', // 默认模块获取变量
//    'VAR_CONTROLLER' => 'controller', // 默认控制器获取变量
//    'VAR_ACTION' => 'action', // 默认操作获取变量
    
    //'ACTION_SUFFIX'  =>'Action',  //操作方法后缀 
    
    //添加命名空间:
    'AUTOLOAD_NAMESPACE' =>array(
        'Addon' => APP_PATH . 'Addon',//插件控制器的命名空间
    ),
    
    'TMPL_ACTION_ERROR' =>'Public:error', //默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' =>'Public:success',//默认成功跳转对应的模板文件
    
     // 'LAYOUT_ON' => TRUE, // 是否启用布局
     //'SHOW_ERROR_MSG' => FALSE, // 显示错误信息
    // 'ERROR_MESSAGE' => '发生错误',
    'ERROR_PAGE' =>'/Public/error.html',
    'SHOW_PAGE_TRACE'=>true,
    'PAGE_TRACE_SAVE'=>true,//保存trace信息

    'LANG_SWITCH_ON'=>true,//开启语言包功能
);
