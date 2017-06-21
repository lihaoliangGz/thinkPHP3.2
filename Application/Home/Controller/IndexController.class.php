<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

//    //空操作:
//    public function _empty($name) {
//        $this->city($name);
//    }
//
//    protected function city($name) {
//        echo "当前城市:$name", "\n";
//    }
//
//    //前置操作方法:
//    public function _before_index() {
//        echo "前置操作方法\n";
//    }
//
//    public function index() {
////        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
//        echo "Hello World!!\n";
//        $model = C('URL_MODEL');
//        echo "$model", "\n";
//        echo '执行Index控制器的index操作\n';
//    }
//
//    public function _after_index() {
//        echo "后置操作方法\n";
//    }
//
//    public function readAction() {//操作方法的后缀设置只是影响控制器类的定义，对URL访问没有影响。
//        $id = $_GET['id'];
//        $name = $_GET['name'];
//        if (isset($id)) {
//            echo "read ,$id" . "\n\n";
//        }
//
//        if (isset($name)) {
//            echo "name:$name";
//       
//        }
//    }
//
//    public function archive() {
//        $year = $_GET['year'];
//        $month = $_GET['month'];
//        echo "年:$year" . "月:$month" . "\n";
//    }
//
//    //参数绑定,按变量名绑定
//    public function hello1($id = 0) {
//        echo "Hello World!   id:$id", "\n\n";
//        $url = U('Index/hello1?id=1');
//        echo "$url\n";
//
//        //获取变量
//        echo I('get.id', 998877), "\n";
//        echo I('get.id'), "\n";
//        echo I('get.name', '', 'htmlspecialchars'), "\n"; //采用htmlspecialchars方法对$_GET['name'] 进行过滤，如果不存在则返回空字符串
//        echo I('get.name', '', ''), "\n"; //不设置过滤
//        echo I('get.name', '', FALSE), "\n"; //不设置过滤
//        var_dump(I('get.')); //获取整个$_GET 数组
//        echo I('param.id'), "\n"; //param	自动判断请求类型获取GET、POST或者PUT参数
//        echo I('id'), "\n"; // 由于param类型是I函数默认获取的变量类型,等同于 I('param.id');
//        echo I('path.1'), "\n";
//        echo I('path.2'), "\n";
//        echo I('path.3'), "\n";
//        echo "/n";
//
//
//        //支持ajax请求,返回数据
////        $data='ok';
//        $data['status'] = 1;
//        $data['message'] = '成功';
//        $data['result'] = 'json数据';
//        $this->ajaxReturn($data);
//    }
//
//    //参数绑定,按变量名绑定
//    public function hello2($year, $month) {
//        echo "参数绑定，年:$year   月:$month";
//    }
//
//    //????
//    public function db_action() {
//        $user = M();
////        $dbFields = $user->getDbFields();
//        echo "字段信息:\n";
//    }
//
//    public function tpl() {
//        $name = "ThinkPHP";
//        $this->assign('name', $name);
//        //$this->display();
//
//        $data['name'] = 'ThinkPHP';
//        $data['email'] = 'thinkphp@qq.com';
//        $this->assign('data', $data);
//
//        $create_time = time();
//        echo $create_time, "==-0-90=8=09\n";
//        $this->create_time = $create_time;
//
//        $this->display();
//    }
//
//    //继承
//    public function tpl_extend() {
//        $title = "测试";
//        $this->title = $title;
//        $status = TRUE;
//        $this->assign('status', $status);
//        $this->display();
//    }
//
//    //三元运算符
//    public function tpl_operator() {
//        G('begin'); //性能调试
//        trace($user, '用户信息LLLLL', 'user');
//        $var = "测试dump()方法";
//        dump($var, TRUE, "label标识", TRUE);
//        $status = TRUE;
//        $this->assign('status', $status);
//        G('end'); //性能调试
//        echo G('begin', 'end', 6) . 's  '; //性能调试,用时
//        echo G('begin', 'end', 'm') . 'kb  '; //性能调试,占用内存
//        
//        //echo "\n",THINK_VERSION,"\n";
//        
//        //错误调试
//        $msg = "错误调试";
//        //E($msg);
//        //数据缓存:
//        $cache = "数据缓存测试";
////        S('name',$cache,array('type'=>'file','expire'=>300));
//        $cache_value = S('name'); //读取缓存
//        S('name', null); //删除缓存
//        echo "<br/>打印数据缓存:$cache_value", "<br/.";
//        $this->display();
//    }
//
//    public function widget() {
//        $this->display();
//    }
//
//    public function session_test() {
//        $session = session('name');
//        echo "session的值 : ";
//        var_dump($session);
//
//        $cookie = cookie();
//        $cookie_1 = $_COOKIE;
//        echo 'cookie的值 : ';
//        var_dump($cookie);
//        var_dump($cookie_1);
//
//
//
////        $session_start = session_start();
////        echo "$session_start";
//    }
//
//    public function verify_test() {
//        $config = array(
//            'fontSize' => 30, // 验证码字体大小
//            'length' => 2, // 验证码位数
//            'useNoise' => FALSE, // 关闭验证码杂点
//        );
//
//        $Verify = new \Think\Verify();
////        $Verify->fontSize=60;
////        $Verify->length=3;
////        $Verify->fontttf='3.ttf';
////        $Verify->useZh=TRUE;
////        $Verify->zhSet = '们以我到他会作时要动国产的一是工就年阶义发成部民可出能方进在了不和有大这';
//        $Verify->codeSet = '123';
//        $Verify->entry();
//    }
//
//    public function image_test() {
//        $image = new \Think\Image(\Think\Image::IMAGE_GD);
//        $image->open('./1.jpg');
//        $width = $image->width();
//        $height = $image->height();
//        $mime = $image->mime();
//        $size = $image->size();
//        $type = $image->type();
//        echo "宽度:$width\n"
//        . "高度:$height\n"
//        . "mime类型:$mime\n"
//        . "类型:$type\n";
//        var_dump($size);
//        $image->crop(200, 200, 200, 200)->save('./crop.jpg');
//        echo "\n=================================================\n\n";
//        $width = $image->width();
//        $height = $image->height();
//        $mime = $image->mime();
//        $size = $image->size();
//        $type = $image->type();
//        echo "宽度:$width\n"
//        . "高度:$height\n"
//        . "mime类型:$mime\n"
//        . "类型:$type\n";
//        var_dump($size);
//        $this->assign('image', $image);
//        $this->display();
//    }
//
//    public function prc_test() {
//        Vendor('phpRPC.phprpc_client');
//        $client = new \PHPRPC_Client('http://serverName/index.php/Home/Server');
//        // 或者采用
//        //$client = new \PHPRPC_Client();
//        //$client->useService('http://serverName/index.php/Home/Server');
//        $result = $client->test1();
//        echo "$result";
//    }
//    
//    public function ip_test(){
//        $ip= get_client_ip();
//        echo "$ip\n\n";
//        $Ip=new \Org\Net\IpLocation();
//        $location = $Ip->getlocation('127.0.0.1');
//        echo "\n",EXT,"\n";
//        echo "$location\n";
//        
//    }
//    
//    public function constant_test(){
//        echo "普通模式:",URL_COMMON,"\n";
//        echo "框架版本号:",THINK_VERSION,"\n";
//        echo "root:",__ROOT__,"\n";
//        echo "dir:",__DIR__,"\n";
//        echo "file:",__FILE__,"\n";
//        echo dirname(__DIR__),"\n";
//        var_dump(strlen("1234\0123"));
//    }
//    
//    public function server_test(){
//        echo $_SERVER['PHP_SELF'],"\n";
//        echo $_SERVER['SERVER_ADDR'],"\n";
//        echo $_SERVER['DOCUMENT_ROOT'],"\n";
//        var_dump($_SESSION);
//        $dump = dump($_COOKIE,FALSE);
//        var_dump($dump);
//        echo __ROOT__,"\n";
//        echo '__IMG__',"\n";
//    }
    //前置操作方法:
    public function _before_index() {
        echo "前置操作方法\n";
    }

    //
    public function index() {
        echo "Home模块->Controller文件夹下的IndexController控制器,index操作", "\n";
        echo "1", "\n";
        //exit(); //设置断点,退出当前脚本
        echo "2", "\n";
        echo "3", "\n";
    }

    //后置操作方法
    public function _after_index() {
        echo "后置操作方法\n";
    }

    //添加了操作后缀
    public function hello() {
        echo "hello";
    }

    //操作方法必须是公共方法
    public function test() {
        echo "test";
        A();
    }

    //Action参数绑定功能(默认已开启,'URL_PARAMS_BIND' =>  true)
    //按变量名绑定时,URL中的参数顺序和操作方法中的参数顺序都可以随意调整，关键是确保参数名称一致即可
    //按变量顺序绑定时,操作方法的定义不需要改变，URL的访问地址分别改成：
    //http://serverName/index.php/Home/Blog/read/5
    //http://serverName/index.php/Home/Blog/archive/2013/11
    //按变量顺序绑定的方式目前仅对PATHINFO地址有效,但是，兼容模式URL地址访问依然有效
    public function read($id = 0) { //设置默认值,避免参数少传报错
        echo 'id=' . $id;
    }

    //Action参数绑定功能
    public function archive($year = '2013', $month = '01') {
        echo 'year=' . $year . '&month=' . $month;
    }

    //自动生成URL,U函数会自动识别当前配置的伪静态后缀
    public function url_create() {
        $u1 = U('Index/index'); //生成Index控制器的index操作的URL地址
        echo "$u1", "\n";
        $u2 = U('Index/read?id=123'); // 生成Index控制器的read操作 并且id为1的URL地址
        $u3 = U('Index/read', array('id' => 123)); //第二个参数
        $u4 = U('Index/read', 'id=123'); //第二个参数
        echo "$u2", "\n";
        echo "$u3", "\n";
        echo "$u4", "\n";

        //域名操作:
        $u5 = U('Index/index', '', TRUE, TRUE); //自动识别当前域名,自动判断当前是否SSL协议，生成https://
        echo "$u5", "\n";
        $u6 = U('Index/index@www.baidu.com'); //指定需要生成地址的域名
        echo "$u6", "\n";

        //锚点支持
        $u7 = U('Index/index#comment');
        echo "$u7", "\n"; //打印结果/thinkphp/index.php/Home/Index/index.html#comment
    }

    //AJAX返回
    //支持ajax请求,返回数据
    public function ajax_return() {
        //$data0='ok';
        //$this->ajaxReturn($data0);
        $data['status'] = 1;
        $data['message'] = '成功';
        $data['result'] = 'json数据';
        $this->ajaxReturn($data);
    }

    //跳转和重定向:
    //跳转:
    public function jump_test() {
        $result=TRUE;
        if($result){
            $this->success("新增成功");//不能自动倒数
        } else {
            $this->error("新增失败",'',5);
        }
       
    }
    
    //重定向:redirect
    public function redi(){
        //控制器的redirect方法
        $this->redirect('Index/index','',5,'页面跳转中...');
        
    }

    //重定向:
    public function redi_test() {
        //redirect函数,测试不成功
        redirect('https://www.baidu.com','',5,'页面跳转中');
    }

    //输入变量
    //变量获取
    public function var_get(){
        //传统方式:
       $id= $_GET['id'];//获取get变量
       var_dump($id);
       //使用
       var_dump(I('get.id')) ; // 相当于 $_GET['id']
       var_dump( I('get.name')); // 相当于 $_GET['name']
        //支持默认值
        var_dump( I('get.id', 0)); // 如果不存在$_GET['id'] 则返回0
        var_dump( I('get.name', '')); // 如果不存在$_GET['name'] 则返回空字符串
        //采用过滤方法
        var_dump( I('get.name', '', 'htmlspecialchars')); // 采用htmlspecialchars方法对$_GET['name'] 进行过滤
        // 获取整个$_GET 数组
        var_dump( I('get.'));
        
        echo "\n===============================\n";
        
        //变量修饰符
        var_dump(I('get.id/d'));  // 强制变量转换为整型
        var_dump(I('post.name/s')); // 强制转换变量为字符串类型
        var_dump(I('post.ids/a')); // 强制变量转换为数组类型
    }
    
    






    //判断请求类型
    public function type_judge() {
        var_dump(IS_GET);//判断是否是GET方式提交
        var_dump(IS_POST); //判断是否是IS_POST方式提交
        var_dump(IS_PUT); //判断是否是IS_PUT方式提交
        var_dump(IS_DELETE); //判断是否是IS_DELETE方式提交
        var_dump(IS_AJAX); //判断是否是IS_AJAX方式提交
        echo REQUEST_METHOD, "\n"; //当前提交类型
        
    }
    
    //空操作，空操作是指系统在找不到请求的操作方法的时候，会定位到空操作（_empty）方法来执行，利用这个机制，我们可以实现错误页面和一些URL的优化。
    //_empty方法的参数就是当前URL里面的操作名(如没有)
    //空操作方法仅在你的控制器类继承系统的Think\Controller类才有效，否则需要自己定义 __call 来实现
    public function _empty($name){
        echo "空操作测试，name:",$name;
    }
    
    
}
