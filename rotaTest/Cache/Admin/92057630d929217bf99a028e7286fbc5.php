<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
<style>
    .add-role{
	   display:inline-block;
    	width:100px;
    	height:26px;
    	line-height:28px;
    	text-align:center;
    	border:1px solid blue;
    	border-radius:4px;
    	margin-left:20px;
    	cursor:pointer;
    }
</style>
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
     $(function(){
    	 
    	 $('.add-role').click(function(){
    	        	var obj = $(this).parents('tr').clone();
    	        	obj.find('.add-role').remove();
    	        	$('#last').before(obj);
    	 });
     });
</script>
</head>
<body>
    <form action="<?php echo U('Admin/Rbac/addUserHandle');?>" method='post'>
    <table class="table">
        <tr>
           <td colspan="2"  align="center">添加用户</td>
        </tr>
        <tr>
           <td align="right" width="40%">用户账号:</td>
           <td>
            <input type="text" name="username"/>
           </td>
        </tr>
        <tr>
           <td align="right">密码:</td>
           <td>
            <input type="password" name="password"/>
           </td>
        </tr>
        <tr>
           <td align="right">所属角色:</td>
           <td>
             <select name="role_id[]"> <!-- 这里的role写成数组的形式，因为一个用户可能会有多个角色 -->
                <option value="">请选择角色</option>
                <?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>)</option><?php endforeach; endif; ?>
             </select>
              <span class='add-role'>添加一个角色</span>
           </td>
        </tr>
        <tr id='last'>
          <td colspan='2' align='center'>
            <input type="submit" value="保存添加"  style='cursor:pointer'/>
          </td>
        </tr>
    </table>
    </form>
</body>
</html>