<?php
/**
 *
 * 为标签位配置相应的行为啦
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/9 0009
 * Time: 上午 8:59
 */

return array(
    //'action_begin' => array('Home\\Behaviors\\TestBehaviors'),
    'app_begin'=> array('Behavior\CheckLangBehavior'),//配置开启多语言行为

);