<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加病人影像信息</title>
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
	    <form action="<?php echo U('Admin/Pic2/upload');?>"   enctype="multipart/form-data"  method="post">
	       <table  border='2px' width="800" height="400">
		       <tr>
		         <td>请选择要上传的图片:&nbsp;&nbsp;&nbsp;&nbsp;<input type='file' name='photo[]'  multiple="multiple"/></td>
		         <td>
			        &nbsp;&nbsp;请输入所属病人ID:&nbsp;&nbsp;<input type="text" name='bid'/>
			        <br/><br/>&nbsp;&nbsp;请输入病人影像号:&nbsp;&nbsp;<input type="text" name='pid'/>
			        <br/><br/>&nbsp;&nbsp;请输入病人姓名:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name='name'/>
			        <br/><br/>&nbsp;&nbsp;请选择病人性别:&nbsp;&nbsp;<input type='radio' name='sex' value='男'/>&nbsp;男&nbsp;&nbsp;<input type='radio' name='sex' value='女'/>&nbsp;女
		        </td>
		       </tr>
		       <tr>
		         <td colspan='2' align='center'><input type='submit' value='上传' style='cursor:pointer'/></td>
		       </tr>
	       </table>
	    </form>
	</div>
</body>
</html>