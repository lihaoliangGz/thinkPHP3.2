<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 多入口设计
 */
// 应用入口文件
// 检测PHP环境
if (version_compare(PHP_VERSION, '5.3.0', '<'))
    die('require PHP > 5.3.0 !');

//定义应用目录
define('APP_PATH', './Application/');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);

define('BIND_MODULE', 'Admin'); // 绑定Admin模块到当前入口文件
//define('BIND_CONTROLLER', 'Test');// 绑定Test控制器到当前入口文件
//引入thinkPHP入口文件
require './ThinkPhp/ThinkPHP.php';
