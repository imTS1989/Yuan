<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加肺结节数据</title>
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
     <form action="<?php echo U('Admin/LunNod/changeHandle');?>" method='post'>
       <table border='2px' width="800" height="400">
         <tr>
           <td align='right'>要修改结节的ID&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='id' value='<?php echo ($preLnod["id"]); ?>'></td>
         </tr>
         <tr>
           <td align='right'>影像号&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pid' value='<?php echo ($preLnod["pid"]); ?>'></td>
         </tr>
         <tr>
           <td align='right'>请选择结节位置&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;
			  <select name='loc'>
				 <option value="<?php echo ($preLnod['loc']); ?>"><?php echo ($preLnod['loc']); ?></option>
				 <option value='右上叶'>右上叶</option>
				 <option value='右中叶'>右中叶</option>
				 <option value='右下叶'>右下叶</option>
				 <option value='左上叶'>左上叶</option>
				 <option value='左下叶'>左下叶</option>
			 </select>
		  </td>
         </tr>
         <tr>
           <td align='right'>请输入编号&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='nodNum' value='<?php echo ($preLnod["nodNum"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入pix_x值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pix_x' value='<?php echo ($preLnod["pix_x"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入pix_y值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pix_y' value='<?php echo ($preLnod["pix_y"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入pix_z值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pix_z' value='<?php echo ($preLnod["pix_z"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入pos_z值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pos_z' value='<?php echo ($preLnod["pos_z"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入直径&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='diam' value='<?php echo ($preLnod["diam"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入密度类型值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='denTyp' value='<?php echo ($preLnod["denTyp"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入位置类型值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='posTyp' value='<?php echo ($preLnod["posTyp"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入病理类型值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pathoTyp' value='<?php echo ($preLnod["pathoTyp"]); ?>'></td>
         </tr>
         <tr>
           <td align='right'>请选择良恶性&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;
              <select name='isBenign'>
                <option value="<?php echo ($preLnod['isBenign']); ?>"><?php echo ($preLnod["isBenign"]); ?></option>
                <option value="良">良性</option>
                <option value="恶">恶性</option>
              </select>
           </td>
         </tr>
         <tr>
           <td align='right'>请输入TNM分期&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='TNM' value='<?php echo ($preLnod["TNM"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入临床分期&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='clinTim' value='<?php echo ($preLnod["clinTim"]); ?>'/></td>
         </tr>
         <tr>
           <td align='right'>请输入bid值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='bid' value='<?php echo ($preLnod["bid"]); ?>'></td>
         </tr>
         <tr>
           <td colspan='2' align='center'>
             <input type='submit' value='保存修改' style='cursor:pointer'/>
           </td>        
         </tr>
       </table>
     </form>
   </div>
</body>
</html>