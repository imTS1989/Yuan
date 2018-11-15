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
     <form action="<?php echo U('Admin/LunNod/addLunNodHandle');?>" method='post'>
       <table border='2px' width="800" height="400">
         <tr>
           <td align='right'>请输入影像号&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pid'></td>
         </tr>
         <tr>
           <td align='right'>请选择结节位置&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;
			  <select name='loc'>
				 <option value="">===请选择位置===</option>
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
           <td align='left'>&nbsp;&nbsp;<input type='text' name='nodNum'></td>
         </tr>
         <tr>
           <td align='right'>请输入pix_x值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pix_x'></td>
         </tr>
         <tr>
           <td align='right'>请输入pix_y值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pix_y'></td>
         </tr>
         <tr>
           <td align='right'>请输入pix_z值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pix_z'></td>
         </tr>
         <tr>
           <td align='right'>请输入pos_z值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pos_z'></td>
         </tr>
         <tr>
           <td align='right'>请输入直径&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='diam'></td>
         </tr>
         <tr>
           <td align='right'>请输入密度类型值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='denTyp'></td>
         </tr>
         <tr>
           <td align='right'>请输入位置类型值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='posTyp'></td>
         </tr>
         <tr>
           <td align='right'>请输入病理类型值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='pathoTyp'></td>
         </tr>
         <tr>
           <td align='right'>请选择良恶性&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;
              <select name='isBenign'>
                <option value="">===请选择===</option>
                <option value="良">良性</option>
                <option value="恶">恶性</option>
              </select>
           </td>
         </tr>
         <tr>
           <td align='right'>请输入TNM分期&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='TNM'></td>
         </tr>
         <tr>
           <td align='right'>请输入临床分期&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='clinTim'></td>
         </tr>
         <tr>
           <td align='right'>请输入bid值&nbsp;:&nbsp;&nbsp;</td>
           <td align='left'>&nbsp;&nbsp;<input type='text' name='bid'></td>
         </tr>
         <tr>
           <td colspan='2' align='center'>
             <input type='submit' value='保存添加' style='cursor:pointer'/>
           </td>        
         </tr>
       </table>
     </form>
   </div>
</body>
</html>