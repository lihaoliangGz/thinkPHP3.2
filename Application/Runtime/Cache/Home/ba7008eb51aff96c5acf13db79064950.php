<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>内置标签define</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1./Public/Home">
    </head>
    <body>
        <!--DEFINE标签用于中模板中定义常量-->
        <?php define('THINK_PHP_1', 'think_php_1'); ?>
    
        <br/>    
        <br/>    
        <br/>
        
        <!--测试是否成功定义-->
        <?php if(defined("THINK_PHP_1")): ?>THINK_PHP_1已经定义
        <?php else: ?>
            THINK_PHP_1还没定义<?php endif; ?>
    
        <br/>
        <?php if(defined("THINK_PHP_2")): ?>THINK_PHP_2已经定义
            <?php else: ?>
            THINK_PHP_2还没定义<?php endif; ?>
            
            
        
        
        
    </body>
</html>