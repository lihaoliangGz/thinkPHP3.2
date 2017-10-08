<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 测试模型的控制器
 * 
 */

namespace Home\Controller;
use Think\Controller;
use Think\Model;

/**
 *
 * ThinkPHP3.2.3 模型章节测试
 * Description of DBController
 *
 * @author Administrator
 */
class DBController extends Controller{
    //实例化模型类测试
    //M和D这两个方法的区别在于M方法实例化模型无需用户为每个数据表定义模型类，如果D方法没有找到定义的模型类，则会自动调用M方法。
    public function instantiation(){
        $User=new \Home\Model\CategoryModel();//通过传统方法实例化模型类
        $select0 = $User->select();
        var_dump($select0);
        
        //测试doumu数据库下的表
        $d = D('Category');//通过D方法实例化模型类,D方法支持KualaLumpur模块调用
        $select = $d->select();
        var_dump($select);
        
        $m = M('admin_user');
        $select1 = $m->select();
        var_dump($select1);
        
        $m = M('city');
        $select1 = $m->select();
        //var_dump($select1);

        echo "\n\n=============================================================\n\n";
        
        
        //跨库操作, 实例化mysql数据库下的db表
        $m0 = M('mysql.db');
        $select2 = $m0->select();
        $dbFields = $m0->getDbFields();//获取字段信息
        var_dump($dbFields);
        var_dump($select2);
        
        echo "=============================================================\n\n";
        
        //实例化空模型类
        //仅仅是使用原生SQL查询的话，不需要使用额外的模型类，实例化一个空模型类即可进行操作了
        //$model=new \Think\Model();
        $model=M(); //等效
        $query = $model->query('SELECT * FROM admin_user');
        var_dump($query);
        
    }

    /**
     * 切换数据库
     */
    public function change(){
        $m = M();
        $m->db(2,"DB_CONFIG1");
        $query=$m->query("select * from country");
        dump($query);

        echo "\n\n===========================================\n\n";

        $find = $m->table("delete")->select();
        dump($find);

    }

    /**
     *  连贯操作
     */
    public function coherent(){

        $m=M("db_test1.country");
        $select=$m->where('name="CHINA"')->order('code desc')->field('name,code')->limit(2)->select();
        dump($select);

        echo "\n\n=================================\n\n";

        $select1=$m->select(array("where" => "name='CHINA'",'order'=>'code desc','limit'=>1));
        dump($select1);
    }

    /**
     * 命名范围
     */
    public function name(){
        $m=D("Category");
        $select=$m->scope('normal')->select();
        dump($select);
    }

    /**
     * 增
     */
    public function insert(){
        $m = D('Category');
        $data['username'] = "ThinkPHP";
        $data['password'] = "21232f297a57a5a743894a0e4a801fc3";
        $m->create($data);
        //$sql=$m->fetchSql(true)->add();//返回sql语句而不执行sql
        //$result=$m->add();
        $result = $m->field('username')->add();//字段过滤
        dump($result);

    }

    /**
     * 查
     */
    public function select(){
        //读取数据
        $m=D('Category');
        $find=$m->where('username="admin"')->order('id desc')->find();//find方法只返回第一条数据
        dump($find);
        dump($m->data());//用data方法获取查询后的数据对象（查询成功后）

        echo "\n\n=============================\n\n";

        //读书去数据集(获取数据表中的多行记录)
        $country=M('db_test1.country');
        $select=$country->where("name='China'")->select();//查询多条数据
        dump($select);

        echo "\n\n=============================\n\n";

        //读取字段值
        $country = M('db_test1.country');
        //$name=$country->where('name="china"')->getField('name');//默认情况下，当只有一个字段的时候，返回满足条件的数据表中的该字段的第一行的值
        //$name=$country->where('name="china"')->getField('name',true);//需要返回整个列的数据(数组形式),true
        $name=$country->where('name="china"')->getField("code,name");//如果传入多个字段的话，默认返回一个关联数组
        dump($name);

    }

    /**
     * 改
     */
    public function update(){
        //更新数据
        $admin=D('Category');
        $data['username'] = "ThnkPHP";
        $data['status'] = "621";
        //$result=$admin->where("id=5")->save($data);
        //$result = $admin->where('id=5')->field('username')->save($data);//字段过滤

        //通过create或者data方法创建要更新的数据对象，然后进行保存操作，这样save方法的参数可以不需要传入
        $result=$admin->where('id=5')->data($data)->save();

        //$admin->create();
        //$admin->save();
        dump($result);

        echo "\n\n===============================\n\n";

        //$result2=$admin->where('id=5')->setField('username', 'admin3');//更新单个字段
        $result2 = $admin->where('id=5')->setField(array('username' => 'admin5', 'status' => '222'));//更新多个字段
        dump($result2);

        //而对于统计字段（通常指的是数字类型）的更新，系统还提供了setInc和setDec方法。

    }

    /**
     * 删
     */
    public function delete(){
        $admin=D('Category');
        //$result=$admin->delete(7);//删除主键id是7的数据
        //$result=$admin->delete('5,6');//删除主键id是5和6的数据
        //$result=$admin->where('username="ThinkPHP"')->delete();
        $result=$admin->where('1')->delete();//删除所有数据
        dump($result);

    }

    /**
     * ActiveRecord
     */
    public function ActiveRecord(){
        $country=M('db_test1.country');
        $result=$country->getByName('china');
        dump($result);
    }

    /**
     * 字段映射
     */
    public function map(){
        $admin=D('Category');
        $data=$admin->find(2);
        $data=$admin->parseFieldsMap($data);//设置开启READ_DATA_MAP参数，或者直接使用parseFieldsMap方法进行转换处理
        dump($data);
    }

    /**
     * 自动验证
     */
    public function autoValidate(){

    }

    /**
     * 自动完成
     */
    public function autoComplete(){

    }

    /**
     * 参数绑定
     */
    public function bind(){
        $admin = D('Category');
        $where['username'] = ':username';
        $select=$admin->where($where)->bind(':username', I('get.username'))->select();
        dump($select);
    }

    /**
     * 查询语言
     *
     * 查询方式
     */
    public function selectType(){
        //使用字符串作为查询条件

        //使用数组作为查询条件(简单的相等判断)
        $admin = D('Category');
        $map['username'] = 'admin';
        $map['status'] = 0;
        $map['_logic'] = 'OR';//使用 _logic 定义查询逻辑(默认的逻辑是AND)
        $select=$admin->where($map)->select();
        dump($select);

        echo "\n\n==========================================\n\n";

        //使用对象方式查询(简单的相等判断)
        $admin = D('Category');
        $map=null;
        $condition=new \stdClass();
        $condition->username = 'admin';
        $condition->status=1;
        $select=$admin->where($condition)->select();
        dump($select);

        //exp表达式:


    }

    //空操作
    public function _empty($name) {
        echo "空操作测试，name:", $name;
    }

}
