<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查看综合信息</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
</head>
<body>
   <table class='table'>
      
      <tr>
        <th>ID</th>
        <th>影像号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>年龄</th>
        <th>吸烟史</th>
        <th>家族史</th>
        <th>病理/手术日期</th>
        <th>病理诊断报告</th>
        <th>MR检查结果</th>
        <th>CT影像时间</th>
        <th>CT诊断报告</th>
        <th>治疗方案</th>
        <th>手术切除部位</th>
        <th>术前CT套数</th>
        <th>SCC(ng/mL)</th>
        <th>CEA(ug/L)</th>
        <th>CYFRA21-1(ng/mL)</th>
        <th>CA15-3(U/mL)</th>
        <th>CA19-9(U/ml)</th>
        <th>CA125(U/ml)</th>
        <th>NSE(ng/mL)</th>
        <th>备注</th>
        <th>肺结节信息</th>
      </tr>
	   <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr>
		     <td><?php echo ($v["id"]); ?></td>
		     <td><?php echo ($v["pid"]); ?></td>
		     <td><?php echo ($v["name"]); ?></td>
		     <td><?php echo ($v["sex"]); ?></td>
		     <td><?php echo ($v["age"]); ?></td>
		     <td><?php echo ($v["exSmoke"]); ?></td>
		     <td><?php echo ($v["exFamily"]); ?></td>
		     <td><?php echo ($v["pathoDate"]); ?></td>
		     <td><?php echo ($v["pathoContent"]); ?></td>
		     <td><?php echo ($v["MR"]); ?></td>
		     <td><?php echo ($v["ct_time"]); ?></td>
		     <td><?php echo ($v["ct_content"]); ?></td>
		     <td><?php echo ($v["scheme"]); ?></td>
		     <td><?php echo ($v["part"]); ?></td>
		     <td><?php echo ($v["set_num"]); ?></td>
		     <td><?php echo ($v["scc"]); ?></td>
			 <td><?php echo ($v["cea"]); ?></td>
			 <td><?php echo ($v["cyfra21-1"]); ?></td>
			 <td><?php echo ($v["ca15-3"]); ?></td>
			 <td><?php echo ($v["ca19-9"]); ?></td>
			 <td><?php echo ($v["ca125"]); ?></td>
			 <td><?php echo ($v["NSE"]); ?></td>
			 <td><?php echo ($v["remark"]); ?></td>
		     <td>
		       [<a href="<?php echo U('Admin/Info/lnodInfo',array('bid'=>$v['id']));?>">查看肺结节</a>]
		     </td>
		  </tr><?php endforeach; endif; ?>
   </table>
</body>
</html>