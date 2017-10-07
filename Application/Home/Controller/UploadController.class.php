<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/9 0009
 * Time: 下午 5:35
 */

namespace Home\Controller;


use Think\Controller;
use Think\Upload;

class UploadController extends Controller{

    public function index(){

        $this->display();
    }

    public function upload(){
        $upload=new Upload();//实例化上传类
        $upload->maxSize=3145728;//设置附件上传大小
        $upload->exts = array('jpg','gif','png','jpeg');//设置上传类型
        $upload->rootPath='./Uploads/photo/';
        //上传文件
        $info=$upload->upload();
        if (!$info) {
            dump($upload->getError());
            //$this->error($upload->getError());
        }else{
            dump('上传成功');
            //$this->success('上传成功');
        }


    }
}