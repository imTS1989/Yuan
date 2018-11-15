<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Excel数据导入</title>
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
    <div class="div">  
	   <form method="post" action="<?php echo U('InputExc/upload');?>" enctype="multipart/form-data">  
	        <table class='table' border='2px' width="800" height="400">
		        <tr>
			        <td align="center">导入Excel数据&nbsp;:</td>  
			        <td align="center"> <label for="file_stu">上传选择&nbsp;:</label> &nbsp;&nbsp;&nbsp;&nbsp;<input name="file_stu" type="file" id="file_stu" /></td>
			    </tr> 
		        <tr>
		          <td colspan="2" align="center"><input type="submit" value="导入"></td>
		        </tr>
		        <tr>
		          <td colspan="2" align="center">
			        <h3><font color="#8A2BE2">温馨提示:</font></h3>  
			        <p><font color="">请确认您的Excel表格类型是<font color="red">xls</font>或者<font color="red">xlsx</font>的,以免出现兼容问题.</font></p>
		          </td>
		        </tr>  
		       
		     </table>  
	   </form>  
</div> 
</body>
</html>