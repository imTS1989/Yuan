<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
</head>
<body>
     <form action="<?php echo U('Admin/Rbac/addRoleHandle');?>" method="post">
		   <table class="table">
			     <tr>
			        <th colspan="2">添加角色</th>
			     </tr>
			     <tr>
			       <td align="right">角色名称:</td>
			       <td>
			          <input type="text" name='name'/>
			       </td>
			     </tr>
			     <tr>
			         <td align="right">角色描述:</td>
			         <td>
			           <input type="text" name='remark'/>
			         </td>
			     </tr>
			     <tr>
			        <td align="right">是否开启:</td>
			        <td>                                           <!-- checked选项是表示，将来表格开启按钮是被选中的状态 -->
			           <input type="radio" name='status' value='1' checked='checked'/>&nbsp;开启&nbsp;
			           <input type="radio" name='status' value='0' />&nbsp;关闭&nbsp;
			        </td>
			     </tr>
			     <tr>
			        <td colspan="2" align="center">
			             <input type="submit" value='保存添加'/>
			        </td>
			     </tr>
		    </table>
     </form>
</body>
</html>