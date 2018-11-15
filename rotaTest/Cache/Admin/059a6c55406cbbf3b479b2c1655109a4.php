<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>基因数据显示</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
</head>
<body>
  <table class='table'>
     <tr>
        <th>ID</th>
        <th>影像号</th>
        <th>EGFR(表皮生长因子)</th>
        <th>ALK(兼并性淋巴瘤激酶)</th>
        <th>KRAS</th>
        <th>ROS1</th>
        <th>MET/MET14</th>
        <th>BRAFV600E</th>
        <th>HER2</th>
        <th>RET</th>
        <th>是否删除</th>
     </tr>
     <?php if(is_array($gene)): foreach($gene as $key=>$v): ?><tr>
           <td><?php echo ($v["id"]); ?></td>
           <td><?php echo ($v["pid"]); ?></td>
           <td><?php echo ($v["egfr"]); ?></td>
           <td><?php echo ($v["alk"]); ?></td>
           <td><?php echo ($v["kras"]); ?></td>
           <td><?php echo ($v["ros1"]); ?></td>
           <td><?php echo ($v["met"]); ?></td>
           <td><?php echo ($v["brafv600e"]); ?></td>
           <td><?php echo ($v["her2"]); ?></td>
           <td><?php echo ($v["ret"]); ?></td>
           <td>
               <?php if(ACTION_NAME == "index" ): ?>[<a href="#">修改</a>]
                  [<a href="<?php echo U(GROUP_NAME.'/Gene/toTrash',array('del'=>1));?>">删除</a>]
               <?php else: ?>
                  [<a href="<?php echo U(GROUP_NAME.'/Gene/index',array('del'=>0));?>">还原</a>]
                  [<a href="<?php echo U(GROUP_NAME.'/Gene/delete');?>">彻底删除</a>]<?php endif; ?>
           </td>
        </tr><?php endforeach; endif; ?>
  </table>
</body>
</html>