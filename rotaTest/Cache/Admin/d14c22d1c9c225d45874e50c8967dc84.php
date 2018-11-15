<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查看此张影像</title>
<style>
	  .div{
		margin:250px 680px;
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
       <tr>
         <td style='background:#FFE4C4'>
                                    这是第<?php echo ($per['bid']); ?>位病人术后的第<?php echo ($per['id']); ?>张影像&nbsp;&nbsp;:
         </td>
       </tr>
       <tr>
        <td><img src="<?php echo ($per['smPath']); ?>"></td>
       </tr>
     </table>
   </div>
</body>
</html>