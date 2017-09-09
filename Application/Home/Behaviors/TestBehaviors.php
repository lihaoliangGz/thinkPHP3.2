<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/9 0009
 * Time: 上午 9:01
 */

namespace Home\Behaviors;
class TestBehaviors extends \Think\Behavior {

    /**
     * 执行行为 run方法是Behavior唯一的接口
     * @access public
     * @param mixed $params 行为参数
     * @return void
     */
    public function run(&$params)
    {
        echo "<br/>TestBehaviors行为执行了....<br/>";
    }
}