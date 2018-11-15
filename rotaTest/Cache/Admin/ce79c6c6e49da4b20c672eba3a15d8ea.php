<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加CT影像信息</title>
</head>
<style>
   .div{
	margin:80px auto;
	width:800px;
	height:200px;
	background:#ffffff;
  	display:table;
  }   
</style>
<body>
   <div class='div'>
     <form action="<?php echo U(GROUP_NAME.'/Img/addImgHandle');?>" method='post'>
       <table border='2px' width="800" height="400">
         <tr>
           <td align='right'>请输入影像号&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pid'></td>
         </tr>
         <tr>
           <td align='right'>术前CT时间&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='ct_time'></td>
         </tr>
         <tr>
           <td align='right'>CT诊断报告&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<textarea name='ct_content' style="width:180px;height:80px;">这里输入CT影像诊断结果</textarea></td>
         </tr>
         <tr>
           <td align='right'>治疗方案&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='scheme'></td>
         </tr>
         <tr>
           <td align='right'>手术切除部位&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<textarea name='part' style="width:180px;height:80px;"></textarea></td>
         </tr>
         <tr>
           <td align='right'>术前CT套数&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='set_num'></td>
         </tr>
         <tr>
           <td align='right'>备注&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<textarea name='remark' style="width:180px;height:80px;">这里输入备注信息</textarea></td>
         </tr>
         <tr>
            <td colspan='2' align='center' style='cursor:pointer'><input type='submit' value='保存添加'></td>
         </tr>
       </table>
     </form>
   </div>
</body>
</html>