<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加病人基本与病理信息</title>
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
			   <form action='<?php echo U(GROUP_NAME."/BaPatho/changeHandle");?>' method='post'>
			     <table class='table' border='2px' width="800" height="400">
				       <tr>
				          <td align='right'>要修改的病人ID&nbsp;:</td>
				          <td align='left'>&nbsp;&nbsp;<input type='text' name='id' value='<?php echo ($preBa["id"]); ?>'/></td>
				       </tr>
				       <tr> 
				           <td align='right'>请输入影像号&nbsp;:</td>
				           <td align='left'>&nbsp;&nbsp;<input type='text' name='pid' value='<?php echo ($preBa["pid"]); ?>'/></td>
				       </tr>
				       <tr>
				            <td align='right'>请输入姓名&nbsp;:</td>
				            <td align='left'>&nbsp;&nbsp;<input type='text' name='name' value='<?php echo ($preBa["name"]); ?>'/></td>
				       </tr>
				       <tr>
					       <td align='right'>性别:&nbsp;</td>
					       <td align='left'><input type='radio' name='sex' value='男' <?php if($preBa["sex"]): ?>checked='checked'<?php endif; ?>/>&nbsp;男&nbsp;&nbsp;<input type='radio' name='sex' value='女' <?php if($preBa["sex"]): ?>checked='checked'<?php endif; ?>/>&nbsp;女</td>
				      </tr>
				      <tr>
				            <td align='right'>年龄&nbsp;:</td>
				            <td>&nbsp;&nbsp;<input type='text' name='age' value='<?php echo ($preBa["age"]); ?>'></td>
				      </tr>
				      <tr>
				           <td align='right'>是否有吸烟史&nbsp;:</td>
				           <td align='left'>&nbsp;&nbsp;
				                <select name='exSmoke'>
				                    <option value="<?php echo ($preBa['exSmoke']); ?>"><?php echo ($preBa['exSmoke']); ?></option>
					                <option value='Y'>Y</option>
					                <option value='N'>N</option>
				                </select>
				           </td>
				       </tr>
				      <tr>
				           <td align='right'>是否有家族史&nbsp;:</td>
				            <td align='left'>&nbsp;&nbsp;  
				                <select name='exFamily'>
					                 <option value="<?php echo ($preBa['exFamily']); ?>"><?php echo ($preBa['exFamily']); ?></option>
					                 <option value='Y'>Y</option>
					                 <option value='N'>N</option>
				                </select>
				            </td>
				       </tr>      
				    
				    <tr>
				        <td align='right'>病理/手术日期&nbsp;:</td>
				        <td align='left'>&nbsp;&nbsp;<input type='text' name='pathoDate' value='<?php echo ($preBa["pathoDate"]); ?>'></td>
				    </tr>
				    <tr>
				         <td align='right'>病理诊断报告&nbsp;:</td>
				        <td align='left'>&nbsp;&nbsp;<textarea name='pathoContent' style="width:180px;height:80px;">&nbsp;&nbsp;<?php echo ($preBa["pathoContent"]); ?></textarea></td>
				   </tr>
				   
				   <tr id='last'>
                     <td colspan='2' align='center'>
                       <input type="submit" value="保存修改"  style='cursor:pointer'/>
                       
                     </td>
                   </tr>
				</table>
			 </form>
		</div>
</body>
</html>