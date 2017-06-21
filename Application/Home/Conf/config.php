<?php

//Home模块下的配置文件
return array(
    //'配置项'=>'配置值'
//    'ACTION_SUFFIX' => 'Action', // 操作方法后缀

    'URL_PARAMS_BIND' => TRUE, //url变量绑定到操作方法作为参数,默认开启。
    'URL_PARAMS_BIND_TYPE' => 1, //设置参数绑定按照变量顺序绑定,默认的参数绑定方式是按照变量名进行绑定
//    'URL_HTML_SUFFIX' =>'shtml',//默认情况下，伪静态的设置为html;
//    'URL_HTML_SUFFIX' => '', //设置伪静态后缀为空,则可以支持所有的静态后缀
//    'URL_HTML_SUFFIX' => 'html|json|xml', //支持多个伪静态后缀
//    'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg|xml', // URL禁止访问的后缀设置
    //注意：URL_DENY_SUFFIX的优先级比URL_HTML_SUFFIX要高。
//    'URL_CASE_INSENSITIVE' =>TRUE,//设置不区分大小写,Linux环境下也生效
    //设置错误信息的显示:
    'SHOW_ERROR_MSG' => TRUE,
    //设置统一的错误提示信息:
    'ERROR_MESSAGE' => '发生错误了!!',
    //将每个方法绑定到类:
//    'ACTION_BIND_CLASS' => TRUE,
    //显示页面的trace信息
    //'SHOW_PAGE_TRACE' => TRUE,
    //保存trace信息
    //'PAGE_TRACE_SAVE' => true,
    // 设置默认的模板主题
    'DEFAULT_THEME' => 'default',
    //把其他的标签库定义为内置标签库（前提是多个标签库没有标签冲突的情况）
    'TAGLIB_BUTLD_IN' => 'cx,article',
    'URL_ROUTER_ON' => FALSE, //开启路由
    'URL_ROUTE_RULES' => array(//定义路由规则
        'test' =>
        function() {
            echo 'just test';
        },
        'hello/:name' =>
        function($name) {
            echo 'Hello ' . $name, "\n\n";
            $_SERVER['PATH_INFO'] = 'Index/read/name/' . $name;
            return FALSE;
        },
        'blog/:year/[:month]' =>
        function ($year, $month) {
            echo "year=$year," . "month=$month";
        },
        'new/:id\d' => 'Index/read',
        'new/:name' => 'Index/read',
        'ar/:year/:month' => 'Index/archive',
        'index' => 'Index/index'
    ),
    //设置Trace的选项卡:
    'TRACE_PAGE_TABS' => array(
        'base' => '基本',
        'file' => '文件',
        'think' => '流程',
        'error' => '错误',
        'sql' => 'SQL',
        'debug' => '调试',
        'user' => '用户'
    ),
    //模板基本配置
    'TMPL_PARSE_STRING' => array(
        '__IMG__' => __ROOT__, '/Public/' . MODULE_NAME
    ),
    //--------------------------------------------
    //'CONTROLLER_LEVEL' =>2, //设置控制器的分级层次         
    //'SHOW_ERROR_MSG' => true, // 显示错误信息
   // 'TRACE_EXCEPTION' => true,
);
