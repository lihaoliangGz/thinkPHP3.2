<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/26 0026
 * Time: 下午 2:44
 */

namespace Home\Controller;
use Think\Controller;
use Think\Hook;
use Think\Log;


class ConstantTestController extends Controller
{

    public function __construct()
    {
        \Think\Hook::add('action_begin','.Home\\Behaviors\\TestBehaviors');
        echo  "__construct()执行";
    }

    //常量测试
    public function index(){
        //\Think\Hook::listen('action_begin');
        $a=strtotime(date("Y-m-d",strtotime("-1 day")));
        $b=strtotime(date("Y-m-d 23:59:59",strtotime("-1 day")));
        $user = M('admin_user');
        dump($user->find(1)) ;
        //echo $user->_sql();
        //echo $user->getDbError();
        dump($user->getDbFields()) ;
        S('name1','value值');
        echo S('name1');

        echo "<br/>=======================<br/>";
        cookie("name","value");
        $cookie = $_COOKIE;
        $cookie2=cookie();
        $ip=get_client_ip();
        dump($ip);
        $Ip = new \Org\Net\IpLocation('xxx.bat');// 实例化类 参数表示IP地址库文件,IP地址库文件和IpLocation类库位于同一目录即可。
        $area=$Ip->getlocation('203.34.5.66');// 获取某个IP地址所在的位置
        dump($area);
        //phpinfo();

    }

    public function Rpc(){
        Vendor('phpRPC.phprpc_client');
        $client=new \PHPRPC_Client('http://test.local.com/thinkphp/index.php/Home/Server');
        $result=$client->test2();
        dump($result);
    }

}