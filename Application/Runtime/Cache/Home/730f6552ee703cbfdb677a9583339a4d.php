<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>内置标签,使用PHP代码</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1./Public/Home">
    </head>
    <body>
        
        <!--方式一：使用php标签（推荐）:-->
        <?php echo "hello world!!" ?>
        <br/>
        <!--方式二：使用原生php代码-->
        <?php echo "Hello ,world!!!"; ?>
        <!--建议需要使用PHP代码的时候尽量采用php标签，因为原生的PHP语法可能会被配置禁用而导致解析错误-->
        
        
    </body>
</html>