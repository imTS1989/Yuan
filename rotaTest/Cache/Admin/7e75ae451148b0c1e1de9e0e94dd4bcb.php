<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查看此病人所有影像</title>
<style>
	  .div{
		margin:250px 560px;
		width:800px;
		height:200px;
		background:#ffffff;
	  	display:table;
	  }   
</style>
</head>
<body style="background:#000;">
   <div class='div'>
     <table border='2px' >
       <?php if(is_array($all)): foreach($all as $key=>$v): ?><tr>
	         <td style='background:#FFE4C4'>这是第<?php echo ($v['bid']); ?>位病人术后的第<?php echo ($v['id']); ?>张影像&nbsp;&nbsp;:</td>
	         <td><img src="<?php echo ($v['smPath']); ?>"></td>
	       </tr><?php endforeach; endif; ?>
        
     </table>
   </div>
</body>
</html>