<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>术后影像信息</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
</head>
<body>
   <table class='table'>
      <tr>
	      <th>ID</th>
	      <th>病人影像号</th>
	      <th>压缩图像路径</th>
	      <th>上传时间</th>
	      <th>所属病人id</th>
	      <th>是否查看此张图片</th>
	      <th>是否查看此序列图片</th>
	      <th>是否删除此序列所有图片</th>
      </tr>
      <?php if(is_array($picInfo)): foreach($picInfo as $key=>$v): ?><tr>
          <td><?php echo ($v["id"]); ?></td>
          <td><?php echo ($v["pid"]); ?></td>
          <td><?php echo ($v["smPath"]); ?></td>
          <td><?php echo ($v["create_time"]); ?></td>
          <td><?php echo ($v["bid"]); ?></td>
          <td>[<a href="<?php echo U(GROUP_NAME.'/Pic2/lookPer',array('id'=>$v['id']));?>">查看此张影像</a>]</td>
          <td>[<a href="<?php echo U(GROUP_NAME.'/Pic2/lookAll',array('bid'=>$v['bid']));?>">查看此病人所有影像</a>]</td>
          <td>
	          <?php if(ACTION_NAME == "picInfo"): ?>[<a href='<?php echo U(GROUP_NAME."/Pic2/toTrash",array("bid"=>$v["bid"],"type"=>1));?>'>删除</a>]
		           <?php else: ?>
		           [<a href="<?php echo U(GROUP_NAME.'/Pic2/toTrash',array('bid'=>$v['bid'],'type'=>0));?>">还原</a>]
		           [<a href="<?php echo U(GROUP_NAME.'/Pic2/delete',array('id'=>$v['bid']));?>">彻底删除</a>]<?php endif; ?>
          </td>
        </tr><?php endforeach; endif; ?>
      <tr>
	     <td colspan='8' align='center'>
	       <?php echo ($page); ?>
	     </td>
	  </tr>
   </table>
</body>
</html>