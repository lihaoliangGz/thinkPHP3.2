<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./Application/');

//设置目录安全文件，默认已设置，index.html可以换成其他名字
//define('DIR_SECURE_FILENAME', 'index.html');

//关闭目录安全文件生成
//define('BUILD_DIR_SECURE', FALSE);

//修改公共模块的位置
//define('COMMON_PATH', './Common');

//自定义配置格式:
//define('CONF_EXT', '.ini');

//define('CONF_EXT', '.test');//配置自定义配置格式(后缀)
//define('CONF_PARSE', 'parse_test');//对应的解析函数

//绑定Admin模块到当前入口文件(自动生成模块目录)
//define('BIND_MODULE', 'Home');
//define('BIND_CONTROLLER', 'Index');
//define('BUILD_CONTROLLER_LIST', 'Index,Use,Menu');

//设置状态(或者称之为应用场景),
//define('APP_STATUS', 'office');//会自动加载该状态对应的配置文件（位于Application/Common/Conf/office.php）
//define('APP_STATUS', 'home');//会自动加载该状态对应的配置文件（位于Application/Common/Conf/home.php）



// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单