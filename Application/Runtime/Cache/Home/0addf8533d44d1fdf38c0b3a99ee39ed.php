<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件上传</title>
</head>
<body>
<form action="http://test.local.com/thinkphp/Home/upload/upload" enctype="multipart/form-data" method="post">

    <input type="text" name="name">
    <input type="file" name="photo" accept="image/*">
    <input type="submit" value="提交">

</form>

</body>
</html>