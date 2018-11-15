<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
    
    <style type="text/css" media="all">
  
      span#xlarge{font-size:40px;}
      
      .color {
	    color: #00608D;
      	font-size:16px;
       }
    
      .main .main-left dl dd {
	      color: #00608D;
      	font-size:16px;
       }
    </style>
    
    <script>
       setInterval("cg.innerHTML=new Date().toLocaleString()",1000);
    </script>
</head>
<body>
<!--头部-->
	<div class='top-list-wrap'>
		<div class='top-list'>
			<ul class='l-list'>
				<li><a href="http://www.baidu.com" target='_blank'>百度搜索</a></li>
				<li><a href="http://www.usst.edu.cn" target='_blank'>上海理工大学</a></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Index/index');?>" target='_self'>返回数据库首页</a></li>
			</ul>
			<ul class='r-list'>
				<li><a href=<?php echo U('Admin/Login/index');?>  target='_self'>数据库后台管理</a></li>
				<li><font id="cg" color='#FFB6C1'>2016/12/21 上午12:00:00</font></li>
			</ul>
		</div>
	</div>


	<div class='top-search-wrap'>
		<div class='top-search'>
			    		
			<img src= '__PUBLIC__/Images/logo.png' width='850' height='120'>
				
					
			<div class='search-wrap'>
				<form action="" method='post'>
					<input type="text" name='keyword' class='search-content'/>
					<input type="submit" name='search' value='搜索'/>
				</form>
			</div>
		</div>
	</div>


	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>基本信息查询</a>
			    <ul>
				   <li><a href="<?php echo U('Index/BaInfo/addPid');?>">按影像号查询</a></li>
				   <li><a href="<?php echo U('Index/BaInfo/addDate');?>">按日期查询</a></li>
				   <li><a href="<?php echo U('Index/BaInfo/addName');?>">按姓名查询</a></li>
				   <li><a href="<?php echo U('Index/BaInfo/addAge');?>">按年龄查询</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>影像信息查询</a>
				<ul>
				   <li><a href="<?php echo U('Index/CtImgInfo/addPid');?>">按影像号查询</a></li>
				   <li><a href="<?php echo U('Index/CtImgInfo/addDate');?>">按日期查询</a></li>
				   <li><a href="<?php echo U('Index/CtImgInfo/addName');?>">按姓名查询</a></li>
				   <li><a href="<?php echo U('Index/CtImgInfo/addAge');?>">按年龄查询</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>肿瘤标记物</a>
				<ul>
					<li><a href="<?php echo U('Index/TumInfo/addPid');?>">按影像号查询</a></li>
					
					<li><a href="<?php echo U('Index/TumInfo/addName');?>">按姓名查询</a></li>
					<li><a href="<?php echo U('Index/TumInfo/addAge');?>">按年龄查询</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>肺结节信息查询</a>
				<ul>
					<li><a href="<?php echo U('Index/LnodInfo/addPid');?>">按影像号查询</a></li>
					
					<li><a href="<?php echo U('Index/LnodInfo/addName');?>">按姓名查询</a></li>
					
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>基因检查信息查询</a>
				<ul>
					<li><a href="">按影像号查询</a></li>
					<li><a href="">按日期查询</a></li>
					<li><a href="">按性别查询</a></li>
					<li><a href="">按年龄查询</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>综合信息查询</a>
				<ul>
					<li><a href="<?php echo U('Index/MixInfo/addPid');?>">按影像号查询</a></li>
					<li><a href="<?php echo U('Index/MixInfo/addName');?>">按姓名查询</a></li>
					<li><a href="<?php echo U('Index/MixInfo/addDate');?>">按日期查询</a></li>
					<li><a href="<?php echo U('Index/MixInfo/addAge');?>">按年龄查询</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>影像查询</a>
				<ul>
					<li><a href="<?php echo U('Index/PicInfo/addPid');?>">按影像号查询</a></li>
					<li><a href="<?php echo U('Index/PicInfo/addName');?>">按姓名查询</a></li>
			
				</ul>
			</li>
			
		</ul>
	</div>

<!--主体-->
	<div class='main'>
		<div class='main-left'>
			<p>肺部影像数据库系统简要说明&nbsp;:</p>
			<dl>
				<dt>开发意义与背景<a href="">更多>></a></dt>
				<dd class='color'>
				   
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;计算机中,数据库是依照某种数据模型组织建立起来并存放二级存储器中的数据集合。这种数据集合具有如下特点: 尽可能不重复，以最优的方式为某个特定组织的多种应用服务，其数据库结构独立于使用它的应用程序，对数据的增、删，改和检索由统一软件进行管理和控制。当数据库应用到医学系统中时，能够极大程度地节省医学数据的存储空间、更好地保护保护患者的隐私、进一步实现不同单位间的资源共享、更细致地整合各种医学资料以及更加快捷地检索各种信息，从而给研究者以及医学工作者带来极大的方便。
                				
                </dd>
				
			</dl>
			<dl>
				<dt>使用须知与提示<a href="">更多>></a></dt>
				<dd>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.请您尽量使用火狐或IE浏览器访问本系统，否则页面可能会出现兼容性问题，影响您的使用体验。<br/><br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.如果本系统由于升级或维护，某些功能暂停使用，我们会及时在首页贴出通知，给您带来的不便，敬请谅解！<br/><br/>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.如果您在使用本系统的过程中有什么意见或建议，欢迎您在我们的<a href="<?php echo U('Index/Remark/index');?>"><font color="red">留言板模块</font></a>提出您宝贵的意见，感谢您的参与！
                </dd>
				
			</dl>
			
			
		</div>
	<!--主体右侧-->
		<div class='main-right'>
			  
			<img src='__PUBLIC__/Images/logo.png' width='300' height='400'>

		</div>
	</div>
<!--底部-->
	<div class='bottom'>
			<div><div id="blink"><span id="xlarge">Welcome&nbsp;&nbsp;&nbsp;to&nbsp;&nbsp;&nbsp;lungimages&nbsp;&nbsp;&nbsp;database&nbsp;&nbsp;&nbsp;!</span></div></div>
			<script type = "text/javascript" >
								function blinklink() {
								    if (!document.getElementById('blink').style.color) {
								        document.getElementById('blink').style.color = "red";
								    }
								    if (document.getElementById('blink').style.color == "red") {
								        document.getElementById('blink').style.color = "#1E90FF";
								    } else {
								        document.getElementById('blink').style.color = "red";
								    }
								    timer = setTimeout("blinklink()", 500);
								}
								function stoptimer() {
								    clearTimeout(timer);
								} 
								blinklink()
		   </script>
	</div>
</body>
</html>