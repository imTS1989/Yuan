<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查看肺结节</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
</head>
<body>
  <table class='table'>
     <tr>
       <th>ID</th>
       <th>pid</th>
       <th>位置</th>
       <th>编号</th>
       <th>pix_x</th>
       <th>pix_y</th>
       <th>pix_z</th>
       <th>pos_z</th>
       <th>直径</th>
       <th>密度类型</th>
       <th>位置类型</th>
       <th>病理类型</th>
       <th>良/恶性</th>
       <th>TNM分期</th>
       <th>临床分期</th>
       <th>所属病人ID</th>
     </tr>
     <?php if(is_array($lnod)): foreach($lnod as $key=>$v): ?><tr>
          <td><?php echo ($v["id"]); ?></td>
          <td><?php echo ($v["pid"]); ?></td>
          <td><?php echo ($v["loc"]); ?></td>
          <td><?php echo ($v["nodNum"]); ?></td>
          <td><?php echo ($v["pix_x"]); ?></td>
          <td><?php echo ($v["pix_y"]); ?></td>
          <td><?php echo ($v["pix_z"]); ?></td>
          <td><?php echo ($v["pos_z"]); ?></td>
          <td><?php echo ($v["diam"]); ?></td>
          <td><?php echo ($v["denTyp"]); ?></td>
          <td><?php echo ($v["posTyp"]); ?></td>
          <td><?php echo ($v["pathoTyp"]); ?></td>
          <td><?php echo ($v["isBenign"]); ?></td>
          <td><?php echo ($v["TNM"]); ?></td>
          <td><?php echo ($v["clinTim"]); ?></td>
          <td><?php echo ($v["bid"]); ?></td>
        </tr><?php endforeach; endif; ?>
  </table>
</body>
</html>