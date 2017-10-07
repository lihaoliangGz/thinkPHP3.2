<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/7 0007
 * Time: 下午 4:48
 */

namespace Home\Model;

/**
 * Class UserModel  虚拟模型类，不继承Model类
 * 应用环境：建立模型类但又不需要进行数据库操作，仅仅是借助模型类来封装一些业务逻辑，那么可以借助虚拟模型来完成
 *
 * 方式二:继承\Think\Model,设置 Protected $autoCheckFields = false;
 *
 * @package Home\Model
 */
class UserModel{

}