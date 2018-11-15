<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
<style type="text/css" media="all">
        div#center{text-align:center;}
    </style>
</head>
<body>
    <table class='table'>
         <tr>
	         <th>用户id</th>
	         <th>用户名称</th>
	         <th>用户密码</th>
	         <th>上一次登录时间</th>
	         <th>上一次登录IP</th>
	         <th>锁定状态</th>
	         
         </tr>
          
           <?php if(is_array($userInfo)): foreach($userInfo as $key=>$v): ?><tr>
	              <td align="right"><?php echo ($v["id"]); ?></td>
	              <td align='right'><?php echo ($v["username"]); ?></td>
	              <td align='right'><?php echo ($v["password"]); ?></td>
	              <td align='right'><?php echo (date('y-m-d H:i',$v["logintime"])); ?></td> 
	              <td align='right'><?php echo ($v["loginip"]); ?></td>
	              <td>
                     <?php if($v["lock"]): ?>锁定<?php endif; ?>
                  </td>     
	           </tr><?php endforeach; endif; ?>
    </table>
</body>
</html>