<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
	<link rel='stylesheet' href="__PUBLIC__/Css/public.css">
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
    
    <style type="text/css" media="all">
        span#xlarge{font-size:xx-large;}
    
    .color {
	color: #00608D;
}
    .main .main-left dl dd {
	color: #00608D;
	font-size: 14px;
}
    .fontSize1 {
	font-size: 14px;
}
    .main .main-left dl dt {
	font-size: 16px;
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
				<li><a href="http://www.houdunwang.com" target='_blank'>上海理工大学</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>医学影像实验室</a></li>
				<li><a href="http://study.houdunwang.com" target='_blank'>肺部影像组</a></li>
			</ul>
			<ul class='r-list'>
				<li><a href=<?php echo U('Admin/Login/index');?>>数据库后台管理</a></li>
				<li><font id="cg" color='blue'>2016/12/21 上午12:00:00</font></li>
			</ul>
		</div>
	</div>


	<div class='top-search-wrap'>
		<div class='top-search'>
			    		
			<img src=''><img src="__PUBLIC__/Images/logo.png" width="850" height="120" />
			
			<div class='search-wrap'>
				<form action="" method='get'>
					<input type="text" name='keyword' class='search-content'/>
					<input type="submit" name='search' value='搜索'/>
				</form>
			</div>
		</div>
	</div>


	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>数据库首页</a>
			</li>
			<li class='nav-lv1-li'>
				<a href="<?php echo U(GROUP_NAME.'/Search/addSearch');?>" >用户信息查询</a>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>DIV+CSS</a>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>JavaScript</a>
				<ul>
					<li><a href="">jQuery</a></li>
					<li><a href="">Ajax</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>PHP</a>
				<ul>
					<li><a href="">字符串</a></li>
					<li><a href="">数组</a></li>
					<li><a href="">对象</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>MySQL</a>
				<ul>
					<li><a href="">存储引擎</a></li>
					<li><a href="">事务</a></li>
					<li><a href="">视图</a></li>
					<li><a href="">存储过程</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>Linux</a>
				<ul>
					<li><a href="">基本命令</a></li>
					<li><a href="">网络配置</a></li>
				</ul>
			</li>
			
		</ul>
	</div>

<!--主体-->
	<div class='main'>
		<div class='main-left'>
			<p>数据查询与显示&nbsp;:</p>
			<dl>
			  <dt>请输入查询条件&nbsp;:<a href="">更多>></a></dt>
				
				<dd class="color">
				   <form action='<?php echo U(GROUP_NAME.'/Search/index');?>' method='post'>
					    <span class="fontSize1">请输入影像号</span>&nbsp;:&nbsp;<br/><br/><input type='text' name='imageId'><br/><br/>请选择性别&nbsp;:<br/><br/>
	                    <input type="radio" name="radio" value="male">&nbsp;男 &nbsp;&nbsp;<input type="radio" name="radio" value="female">&nbsp;女<br/><br/> <input name="sub" type="submit" value="查询" />
	             </form>
              </dd>
				
			</dl>
			<dl>
			  <dt>查询结果显示&nbsp;:<a href="">更多>></a></dt>
				<dd>
				    <table class='table'>
				         <?php if(is_array($userInfo)): foreach($userInfo as $key=>$v): ?><tr>
				              <td>id</td>
				              <td><?php echo ($v["id"]); ?></td>
				            </tr>
				            <tr>
				               <td>用户名&nbsp;:</td>
				               <td><?php echo ($v["username"]); ?></td>
				            </tr>
				            <tr>
				                <td>密码&nbsp;:</td>
				                <td><?php echo ($v["password"]); ?></td>
				            </tr>
				            <tr>
				                <td>登录时间&nbsp;:</td>
				                <td><?php echo ($v["logintime"]); ?></td>
				            </tr>
				            <tr>
				                 <td>登录ip&nbsp;:</td>
				                 <td><?php echo ($v["loginip"]); ?></td>
				            </tr>
				            <tr>
				                  <td>是否锁定</td>
				                  <td><?php echo ($v["lock"]); ?></td>
				            </tr><?php endforeach; endif; ?>
				    </table>
				
               </dd>
				
			</dl>
			
			
		</div>
     
      <!--主体右侧-->
		<div class='main-right'> 
        <img src="__PUBLIC__/Images/logo.png" width="280" height="320" /> </div>
	</div>
<!--底部-->
	<div class='bottom'>
		<div><div id="blink"><span id="xlarge">Welcome&nbsp;&nbsp;&nbsp;to&nbsp;&nbsp;&nbsp;lungimaging&nbsp;&nbsp;&nbsp;database&nbsp;&nbsp;&nbsp;!</span></div></div>
	  <script type = "text/javascript" >
							function blinklink() {
							    if (!document.getElementById('blink').style.color) {
							        document.getElementById('blink').style.color = "red";
							    }
							    if (document.getElementById('blink').style.color == "red") {
							        document.getElementById('blink').style.color = "blue";
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