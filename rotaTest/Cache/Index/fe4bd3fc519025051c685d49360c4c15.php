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
				<a href="">肿瘤标记物</a>>
				<a href="">按年龄</a>
			</div>
			<div class="title">
			  <form action="<?php echo U('Index/TumInfo/ageSearch');?>" method='post'>
					<p>
					    请输入病人年龄&nbsp;:&nbsp;<input type='text' name='age'><br/> 
				    </p>
					<div>
						<span class='fl'>数据创建于：2018年3月1日</span>
						<span class='fr'><input type='submit' value='查询' style='cursor:pointer'></span>
					</div>
			  </form>
			</div>
			<div class='content'>
				<?php if(is_array($ageInfo)): foreach($ageInfo as $key=>$v): ?><table   border='2px'  bordercolor="blue" cellspacing="0" cellpadding="0">
					  <tr>
					    <th>影像号</th>
					    <th>姓名</th>
					    <th>性别</th>
					    <th>年龄</th>
					    <th>SCC(ug/L)</th>
					    <th>CEA(ug/L)</th>
					    <th>CYFRA21-1(ng/ml)</th>
					    <th>CA15-3(u/ml)</th>
					    <th>CA19-9(U/ml)</th>
					    <th>CA125</th>
					    <th>NSE</th>
					  </tr>
				     <?php if(is_array($ageInfo)): foreach($ageInfo as $key=>$v): ?><tr>
				          <td style='background:#F0FFFF'><?php echo ($v["pid"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["name"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["sex"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["age"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["scc"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["cea"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["cyfra21-1"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["ca15-3"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["ca19-9"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["ca125"]); ?></td>   
				          <td style='background:#F0FFFF'><?php echo ($v["nse"]); ?></td>   
				        </tr><?php endforeach; endif; ?>
				   </table><?php endforeach; endif; ?>
		
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