<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/index.js"></script>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
   <script type = "text/javascript" >
   $(function () {
		$('.nav-lv1-dd').hover(function () {
			$(this).find('.top-cate').addClass('cur').next().fadeIn(200);
		}, function () {
			$(this).find('.top-cate').removeClass('cur').next().fadeOut(200);
		});
	});
   </script>
</head>
<body>
	<div id="top">
		<div class="menu">
		
			<a href="<?php echo U('Admin/Info/index');?>">关联模型管理</a>
		    <a href="<?php echo U('Admin/InputExc/index');?>">Excel一键导入</a>
		    <a href="<?php echo U('Admin/OutputExc/index');?>">Excel一键导出与下载</a>
			
		</div>
		<div class="exit">
			<a href="<?php echo U('Index/Index/index');?>" target="_self">返回前台首页</a>
			<a href="#" target="_blank">医学影像科研实验室</a>
			<a href="<?php echo U(GROUP_NAME.'/Login/index');?>" target="_blank">返回登录界面</a>
		</div>
	</div>
	
	<div id="left">
		
		
			<dl class='nav-lv1-dd'>
				<dt class='top-cate'>病理数据管理</dt>
				<dd><a href="<?php echo U(GROUP_NAME.'/BaPatho/addBaPatho');?>">添加基本与病理信息</a></dd>
				<dd><a href="<?php echo U(GROUP_NAME.'/BaPatho/index');?>">基本与病理信息显示</a></dd>
			    <dd><a href="<?php echo U(GROUP_NAME.'/BaPatho/trash');?>">查看回收站</a></dd>
			</dl>
		
		
		
		<dl>
			<dt>CT影像数据管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Img/addImg');?>">添加影像信息</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Img/index');?>">影像信息显示</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Img/trash');?>">查看回收站</a></dd>
		</dl>
		<dl>
			<dt>肺结节数据管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/LunNod/addLunNod');?>">添加肺结节信息</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/LunNod/index');?>">肺结节信息显示</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/LunNod/trash');?>">查看回收站</a></dd>
		</dl>
		<dl>
			<dt>肿瘤标记物数据管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/TumMark/addTumMark');?>">添加肿瘤标记物信息</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/TumMark/index');?>">显示肿瘤标记物信息</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/TumMark/trash');?>">查看回收站</a></dd>
		</dl>
		
		<dl>
			<dt>术前影像管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Pic/index');?>">上传影像</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Pic/picInfo');?>">查看影像存储</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Pic/trash');?>">查看回收站</a></dd>
		</dl>
		
		<dl>
			<dt>术后影像管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Pic2/index');?>">上传影像</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Pic2/picInfo');?>">查看影像存储</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Pic2/trash');?>">查看回收站</a></dd>
		</dl>
		
		
		<dl>
			<dt>基因数据管理</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/Gene/addGene');?>">添加基因数据</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Gene/index');?>">显示基因数据</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME.'/Gene/trash');?>">查看回收站</a></dd>
			
		</dl>
		<dl>
			<dt>随访数据管理</dt>
			<dd><a href="">添加随访信息</a></dd>
			<dd><a href="">显示随访信息</a></dd>
			<dd><a href="">查看回收站</a></dd>
		</dl>
		<dl>
			<dt>RBAC</dt>
			<dd><a href="<?php echo U('Admin/Rbac/index');?>">用户列表</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/role');?>">角色列表</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/node');?>">节点列表</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/addUser');?>">添加用户</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/addRole');?>">添加角色</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/addNode');?>">添加节点</a></dd>
			
		</dl>
		<dl>
			<dt>系统设置</dt>
			<dd><a href="<?php echo U(GROUP_NAME.'/System/verify');?>">验证码设置</a></dd>
		</dl>
	</div>
	
	
	<div id="right">
		<iframe name="iframe" src="#"></iframe>
	</div>
</body>
</html>