<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>切割图片</title>
<script type="text/javascript" src="__PUBLIC__/cut_img/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/cut_img/layer/layer.js"></script>
</head>
 
<body>
 
<img id="img_url" src="__PUBLIC__/cut_img/img/11.jpg" />
<p><a href="javascript:void(0);"  onclick="cut_pic();">切割图片</a></p> 
<script type="text/javascript">
     
    function cut_pic(){
        var pic = $("#img_url").attr('src');
        layer.open({
            type: 2,
            area: ['80%', '90%'],
            fixed: false, //不固定
            maxmin: true,
            content: 'cut.html#'+pic
        });
    }
    function loadImage(img_url){
        $("#img_url").attr('src',img_url);
    }
     
</script>
</body>
</html>