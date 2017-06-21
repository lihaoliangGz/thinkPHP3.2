<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * 
 */

namespace Home\Controller;
use Think\Controller;
/**
 * Description of DebugController
 * 调试测试的控制器
 * @author Administrator
 */
class DebugController extends Controller {
    
    //异常处理
    public function exception_test(){
        //手动抛出异常
        //E('新增异常');//输出错误信息，并中止执行
        throw new \Think\Exception('新增异常2');
    }
    
    //日志记录
    public function log_test(){
        //手动记录
        //$record = \Think\Log::record("测试日志记录",'WARN');
        $record = \Think\Log::record("测试日志记录");
        $write = \Think\Log::write("实时记录日志",'WARN');
        var_dump($write);
        var_dump($record);
        
        //方法 描述
        //Log::record() 记录日志信息到内存
        //Log::save() 把保存在内存中的日志信息（用指定的记录方式）写入
        //Log::write() 实时写入一条日志信息
    }
    
    //页面Trace 和断点调试
    public function trace_test(){
        //把用户信息调试输出到用户选项卡
        
        $info='测试信息';
        trace($info,"提示");//信息会输出到debug选项卡
        
        $user="用户信息调试";
        trace($user,'提示','user');//信息输出到指定的'user'选项卡
        
        $error="错误信息";
        trace($error,'错误','error'); //信息输出到指定的'error'选项卡
        
        //断点调试:在不同的位置对某个变量进行trace输出
        $blog = D("goods_type");
        $vo = $blog->create();
        trace($vo, 'create vo');
        $vo = $blog->find();
        trace($vo, 'find vo');
    }
    
    //变量调试
    public function dump_test(){
        $var="变量调试";
        dump($var);
        dump($var,true,'label标识:',FALSE);
        $dump = dump($var,FALSE,'label标识:',FALSE);
        echo "$dump";
    }
    
    //性能调试
    public function g_test(){
        G('begin');//记录开始标记位
        //...其他代码段
        G('end');//记录结束标记位
        echo G('begin','end',6),"s","\n";//计算时间,6表示小数点位数是6位
        echo G('begin','end','m'),"KB";//计算内存
        
    }
    
    //模型调试(数据库)
    public function model_test(){
        //调试执行的SQL语句
        $user=M('goods_type');
        $find = $user->find(1);
        dump($find);//打印查询的结果
        echo $user->getLastSql();//用getLastsql方法来输出上次执行的sql语句
        echo "\n";
        echo $user->_sql();//3.2版本可以使用的简化的方法
        
        //调试数据库的错误信息
        $user=M("goods_type");
        $result = $user->find();
        dump($result,true,'',FALSE);
        //CURD操作如果返回值为false，表示数据库操作发生错误，这个时候就需要使用模型的getDbError方法来查看数据库返回的具体错误信息。
        if($result===FALSE){
            echo $user->getDbError();
        }
    }
}
