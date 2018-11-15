<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
	<link rel="stylesheet" href="__PUBLIC__/Css/show.css" />
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
    
    <style type="text/css" media="all">
  
     span#xlarge{font-size:40px;}
      .color {
	    color: #00608D;
       }
    
      .main .main-left dl dd {
	      color: #00608D;
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
				<li><a href=<?php echo U('Admin/Login/index');?>>数据库后台管理</a></li>
				<li><font id="cg" color='#FFB6C1'>2016/12/21 上午12:00:00</font></li>
			</ul>
		</div>
	</div>



	<div class='top-search-wrap'>
		<div class='top-search'>
			    		
			<img src= '__PUBLIC__/Images/logo.png' width='800' height='120'>
				
					
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
			<div class='location'>
				<a href="">数据库首页</a>>
				<a href="">肺结节信息</a>>
				<a href="">按姓名</a>
			</div>
			<div class="title">
			  <form action="<?php echo U('Index/LnodInfo/nameSearch');?>" method='post'>
					<p>
					    请输入病人姓名&nbsp;:&nbsp;<input type='text' name='name'>&nbsp;&nbsp;<input type='radio' name='radio' value='男'>男&nbsp;&nbsp;<input type='radio' name='radio' value='女'>女<br/> 
				    </p>
					<div>
						<span class='fl'>数据创建于：2018年3月1日</span>
						<span class='fr'><input type='submit' value='查询' style='cursor:pointer'></span>
					</div>
			  </form>
			</div>
			<div class='content'>
				
				  <table  width="520" height="400" border='2px'  bordercolor="blue" cellspacing="0" cellpadding="0">
					  <tr>
					    <td align='right' style='background:#FFE4C4'>影像号&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($nameInfo[0]['pid']); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>姓名&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($nameInfo[0]['name']); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>性别&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($nameInfo[0]['sex']); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>年龄&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($nameInfo[0]['age']); ?></td>
					  </tr>
			     <?php if(is_array($nameInfo)): foreach($nameInfo as $key=>$v): if(is_array($v["lungnode"])): foreach($v["lungnode"] as $key=>$val): ?><tr>
					    <td align='right' style='background:#FFE4C4'>位置信息&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["loc"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>结节编号&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["nodNum"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>PIX_X&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["pix_x"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>PIX_Y&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["pix_y"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>PIX_Z&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["pix_z"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>POS_Z&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["pos_z"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>直径&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["diam"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>密度类型&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["denTyp"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>位置类型&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["posTyp"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>病理类型&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["pathoTyp"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>良恶性&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["isBenign"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>TNM分期&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["TNM"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>临床分期&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["clinTim"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>MR检查&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["MR"]); ?></td>
					  </tr><?php endforeach; endif; endforeach; endif; ?>	  
				   </table>
				
		
			</div>
		</div>
	<!--主体右侧-->
		<div class='main-right'>
			<img src='__PUBLIC__/Images/logo.png' width='300' height='400'>
		</div>
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