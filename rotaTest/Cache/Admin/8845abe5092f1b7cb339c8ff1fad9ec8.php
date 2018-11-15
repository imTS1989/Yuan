<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加基因检查信息</title>
<style>
   .div{
	margin:80px auto;
	width:800px;
	height:200px;
	background:#ffffff;
  	display:table;
  }   
</style>
</head>
<body>
   <div class='div'>
     <form action="<?php echo U(GROUP_NAME.'/Gene/addGeneHandle');?>" method='post'>
       <table class='table' border='2px' width="800" height="400">
         <tr>
            <td align='right'>请输入影像号&nbsp;:&nbsp;&nbsp;</td>
            <td align='left'>&nbsp;&nbsp;<input type='text' name='pid'></td>
         </tr>
         <tr>
            <td align='right'>EGFR(表皮生长因子受体)&nbsp;:&nbsp;&nbsp;</td>
            <td align='left'>&nbsp;&nbsp;<input type='text' name='egfr'></td>
         </tr>
         <tr>
            <td align='right'>ALK(兼并性淋巴瘤激酶)&nbsp;:&nbsp;&nbsp;</td>
            <td align='left'>&nbsp;&nbsp;<input type='text' name='alk'></td>
         </tr>
         <tr>
            <td align='right'>KRAS&nbsp;:&nbsp;&nbsp;</td>
            <td align='left'>&nbsp;&nbsp;<input type='text' name='kras'></td>
         </tr>
         <tr>
            <td align='right'>ROS1&nbsp;:&nbsp;&nbsp;</td>
            <td align='left'>&nbsp;&nbsp;<input type='text' name='ros1'></td>
         </tr>
         <tr>
            <td align='right'>MET/MET14&nbsp;:&nbsp;&nbsp;</td>
            <td align='left'>&nbsp;&nbsp;<input type='text' name='met'></td>
         </tr>
         <tr>
            <td align='right'>BRAFV600E&nbsp;:&nbsp;&nbsp;</td>
            <td align='left'>&nbsp;&nbsp;<input type='text' name='brafv600e'></td>
         </tr>
         <tr>
            <td align='right'>HER2&nbsp;:&nbsp;&nbsp;</td>
            <td align='left'>&nbsp;&nbsp;<input type='text' name='her2'></td>
         </tr>
         <tr>
            <td align='right'>RET&nbsp;:&nbsp;&nbsp;</td>
            <td align='left'>&nbsp;&nbsp;<input type='text' name='ret'></td>
         </tr>
         <tr>
             <td colspan='2' align='center'><input type='submit' value='保存添加'></td>
         </tr>
       </table>
     </form>
   </div>
</body>
</html>