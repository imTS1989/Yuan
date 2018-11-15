<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查看CT影像诊断信息</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
</head>
<body>
   <table class='table'>
     <tr>
         <th>ID</th>
         <th>影像号</th>
         <th>术前CT时间</th>
         <th>CT影像诊断报告</th>
         <th>治疗方案</th>
         <th>手术切除部位</th>
         <th>术前CT套数</th>
         <th>备注</th>
         <th>是否删除</th>
     </tr>
     <?php if(is_array($ctImg)): foreach($ctImg as $key=>$v): ?><tr>
           <td><?php echo ($v["id"]); ?></td>
           <td><?php echo ($v["pid"]); ?></td>
           <td><?php echo ($v["ct_time"]); ?></td>
           <td><?php echo ($v["ct_content"]); ?></td>
           <td><?php echo ($v["scheme"]); ?></td>
           <td><?php echo ($v["part"]); ?></td>
           <td><?php echo ($v["set_num"]); ?></td>
           <td><?php echo ($v["remark"]); ?></td>
           <td>
              <?php if(ACTION_NAME == "index"): ?>[<a href="<?php echo U('Admin/Img/change',array('id'=>$v['id']));?>">修改</a>]
                [<a href="<?php echo U('Admin/Img/toTrash',array('id'=>$v['id'],'type'=>1));?>">删除</a>]
              <?php else: ?>
                [<a href="<?php echo U('Admin/Img/toTrash',array('id'=>$v['id'],'type'=>0));?>">还原</a>]
                [<a href="<?php echo U('Admin/Img/delete',array('id'=>$v['id']));?>">彻底删除</a>]<?php endif; ?>
           </td>
         </tr><?php endforeach; endif; ?>
      <tr>
           <td colspan='9' align='center'><?php echo ($page); ?></td>
         </tr>
   </table>
</body>
</html>