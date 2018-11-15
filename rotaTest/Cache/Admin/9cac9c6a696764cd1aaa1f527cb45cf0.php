<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查看肿瘤标记物数据</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
</head>
<body>
   <table class='table'>
        <tr>
           <th>ID</th>
           <th>影像号</th>
           <th>SCC/鳞状细胞癌相关抗原(ng/ml)</th>
           <th>CEA/癌胚抗原(ug/L)</th>
           <th>CYFRA21-1/细胞角质蛋白21-1片段(ng/ml)</th>
           <th>CA15-3(U/ml)</th>
           <th>CA19-9(U/ml)</th>
           <th>CA125/癌抗原125(U/ml)</th>
           <th>NSE/神经元特异性烯醇化酶(ng/ml)</th>
           <th>是否移除至回收站</th>
        </tr>
        <?php if(is_array($tumMark)): foreach($tumMark as $key=>$v): ?><tr>
		           <td><?php echo ($v["id"]); ?></td>
		           <td><?php echo ($v["pid"]); ?></td>
		           <td><?php echo ($v["scc"]); ?></td>
		           <td><?php echo ($v["cea"]); ?></td>
		           <td><?php echo ($v["cyfra21-1"]); ?></td>
		           <td><?php echo ($v["ca15-3"]); ?></td>
		           <td><?php echo ($v["ca19-9"]); ?></td>
		           <td><?php echo ($v["ca125"]); ?></td>
		           <td><?php echo ($v["nse"]); ?></td>
		           <td>
                      <?php if(ACTION_NAME == "index"): ?>[<a href='<?php echo U(GROUP_NAME."/TumMark/change",array("id"=>$v["id"]));?>'>修改</a>]
                          [<a href='<?php echo U(GROUP_NAME."/TumMark/toTrash",array("id"=>$v["id"],"type"=>1));?>'>删除</a>]
                       <?php else: ?>
                          [<a href="<?php echo U(GROUP_NAME.'/TumMark/toTrash',array('id'=>$v['id'],'type'=>0));?>">还原</a>]
                          [<a href="<?php echo U(GROUP_NAME.'/TumMark/delete',array('id'=>$v['id']));?>">彻底删除</a>]<?php endif; ?>
                   </td>
		        </tr><?php endforeach; endif; ?>
	     
	     <tr>
	        <td colspan='10' align='center'>
	           <?php echo ($page); ?>
	        </td>
	     </tr>
   
   </table>
</body>
</html>