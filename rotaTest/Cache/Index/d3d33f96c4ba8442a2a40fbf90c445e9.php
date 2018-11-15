<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	
	<link rel="stylesheet" href="__PUBLIC__/Css/show.css" />
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
    
    <style type="text/css" media="all">
  
      span#xlarge{font-size:xx-large;}
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
				<li><font id="cg" color='blue'>2016/12/21 上午12:00:00</font></li>
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
				   <li><a href="">按影像号查询</a></li>
				   <li><a href="">按日期查询</a></li>
				   <li><a href="">按姓名查询</a></li>
				   <li><a href="">按年龄查询</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>肿瘤标记物</a>
				<ul>
					<li><a href="">按影像号查询</a></li>
					<li><a href="">按日期查询</a></li>
					<li><a href="">按姓名查询</a></li>
					<li><a href="">按年龄查询</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>肺结节信息查询</a>
				<ul>
					<li><a href="">按影像号查询</a></li>
					<li><a href="">按日期查询</a></li>
					<li><a href="">按姓名查询</a></li>
					<li><a href="">按年龄查询</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>基因检查信息查询</a>
				<ul>
					<li><a href="">按影像号查询</a></li>
					<li><a href="">按日期查询</a></li>
					<li><a href="">按姓名查询</a></li>
					<li><a href="">按年龄查询</a></li>
				</ul>
			</li>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>综合信息查询</a>
				<ul>
					<li><a href="">按影像号查询</a></li>
					<li><a href="">按日期查询</a></li>
					<li><a href="">按姓名查询</a></li>
					<li><a href="">按年龄查询</a></li>
				</ul>
			</li>
			
		</ul>
	</div>


<!--主体-->
	<div class='main'>
		<div class='main-left'>
			<div class='location'>
				<a href="">数据库首页</a>>
				<a href="">基本信息</a>>
				<a href="">按影像号</a>
			</div>
			<div class="title">
			  <form action="<?php echo U('Index/MixInfo/ageSearch');?>" method='post'>
					<p>
					    请输入病人年龄&nbsp;:&nbsp;<input type='text' name='age'>
				    </p>
					<div>
						<span class='fl'>数据创建于：2018年3月1日</span>
						<span class='fr'><input type='submit' value='查询' style='cursor:pointer'></span>
					</div>
			  </form>
			</div>
			<div class='content'>
				<?php if(is_array($ageInfo)): foreach($ageInfo as $key=>$v): ?><table    class='table' border='2px' width="520" height="400" bordercolor="blue" cellspacing="0" cellpadding="0">
					
					  <tr>
					    <td align='right' style='background:#FFE4C4'>影像号&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["pid"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>姓名&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["name"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>性别&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["sex"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>年龄&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["age"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>吸烟史&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["exSmoke"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>家族史&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["exFamily"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>病理/手术日期&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["pathoDate"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>病理诊断报告&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["pathoContent"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>MR检查&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["MR"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>CT影像时间&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["ct_time"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>CT诊断报告&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["ct_content"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>治疗方案&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["scheme"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>手术切除部位&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["part"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>术前CT套数&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["set_num"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>备注&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["remark"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>SCC(ng/ml)&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["scc"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>CEA(ug/L)&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["cea"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>CYFRA21-1(ng/ml)&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["cyfra21-1"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>CA15-3(U/ml)&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["ca15-3"]); ?></td>
					  </tr>
					  <tr>
					    <td align='right' style='background:#FFE4C4'>CA19-9(U/ml)&nbsp;:&nbsp;</td>
					    <td align='left' style='background:#F0FFFF'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["ca19-9"]); ?></td>
					  </tr>
					  <tr>
					     <td colspan='20' align='center'>[<a href="<?php echo U('Index/MixInfo/lnod',array('id'=>$v['id']));?>">查看此病人肺结节信息</a>]</td>
					  </tr>
				   </table><?php endforeach; endif; ?>
		
			</div>
		</div>
	<!--主体右侧-->
		<div class='main-right'>
			<img src='__PUBLIC__/Images/logo.png' width='280' height='380'>
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