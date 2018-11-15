<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查看肺结节信息</title>
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
       <th>bid</th>
       <th>是否删除</th>
     </tr>
     <?php if(is_array($lungNode)): foreach($lungNode as $key=>$v): ?><tr>
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
          <td>
            <?php if(ACTION_NAME == index): ?>[<a href="<?php echo U('Admin/LunNod/change',array('id'=>$v['id']));?>">修改</a>]
               [<a href="<?php echo U('Admin/LunNod/toTrash',array('id'=>$v['id'],'type'=>1));?>">删除</a>]
            <?php else: ?>
               [<a href="<?php echo U('Admin/LunNod/toTrash',array('id'=>$v['id'],'type'=>0));?>">还原</a>]
               [<a href="<?php echo U('Admin/LunNod/delete',array('id'=>$v['id']));?>">彻底删除</a>]
            </else><?php endif; ?>
          </td>
       </tr><?php endforeach; endif; ?>
    <tr>
      <td colspan='17' align='center'><?php echo ($page); ?></td>
    </tr>
   </table>
</body>
</html>