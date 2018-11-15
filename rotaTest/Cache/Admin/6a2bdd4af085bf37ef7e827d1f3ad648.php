<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加肿瘤标记物信息</title>
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
     <form action="<?php echo U(GROUP_NAME.'/TumMark/changeHandle');?>" method='post'>
	     <table class='table' border='2px' width="800" height="400">
	         <tr>
	           <td align='right'>要修改的病人ID&nbsp;:</td>
	           <td align='left'>&nbsp;&nbsp;<input type='text' name='id' value='<?php echo ($preTum["id"]); ?>'/></td>
	         </tr>
	         <tr>
	            <td align='right'>请输入影像号&nbsp;:</td>
	            <td align='left'>&nbsp;&nbsp;<input type='text' name='pid' value='<?php echo ($preTum["pid"]); ?>'/></td>
	         </tr>
	         <tr>
	              <td align='right'>SCC/鳞状细胞相关抗原(ng/mL)&nbsp;:</td>
	              <td align='left'>&nbsp;&nbsp;<input type='text' name='scc' value='<?php echo ($preTum["scc"]); ?>'/></td>
	         </tr>
	         <tr>
	              <td align='right'>CEA/癌胚抗原(ug/L)&nbsp;:</td>
	              <td align='left'>&nbsp;&nbsp;<input type='text' name='cea' value='<?php echo ($preTum["cea"]); ?>'/></td>
	         </tr>
	         <tr>
	              <td align='right'>CYFRA21-1/细胞角质蛋白21-1片段(ng/mL)&nbsp;:</td>
	              <td align='left'>&nbsp;&nbsp;<input type='text' name='cyfra21-1' value='<?php echo ($preTum["cyfra21-1"]); ?>'/></td>
	         </tr>
	         <tr>
	              <td align='right'>CA15-3/癌胚抗原(U/ml)&nbsp;:</td>
	              <td align='left'>&nbsp;&nbsp;<input type='text' name='ca15-3' value='<?php echo ($preTum["ca15-3"]); ?>'/></td>
	         </tr>
	         <tr>
	              <td align='right'>CA19-9(U/mL)&nbsp;:</td>
	              <td align='left'>&nbsp;&nbsp;<input type='text' name='ca19-9' value='<?php echo ($preTum["ca19-9"]); ?>'/></td>
	         </tr>
	         <tr>
	              <td align='right'>CA125/癌抗原125(U/ml)&nbsp;:</td>
	              <td align='left'>&nbsp;&nbsp;<input type='text' name='ca125' value='<?php echo ($preTum["ca125"]); ?>'/></td>
	         </tr>
	         <tr>
	              <td align='right'>NSE/神经元特异性烯醇化酶(ng/mL)&nbsp;:</td>
	              <td align='left'>&nbsp;&nbsp;<input type='text' name='nse' value='<?php echo ($preTum["nse"]); ?>'/></td>
	         </tr>
	         <tr>
	             <td colspan='2' align='center'>
	                 <input type='submit' value='保存修改' style='cursor:pointer'>
	             </td>
	         </tr>
	  </table>
	 </form>
  </div>
</body>
</html>