<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查看基本及病理数据</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css">
</head>
<body>
   <table class='table'>
        <tr>
           <th>主键ID</th>
           <th>影像号</th>
           <th>姓名</th>
           <th>性别</th>
           <th>年龄</th>
           <th>吸烟史</th>
           <th>家族史</th>
           <th>病理/手术日期</th>
           <th>病理诊断</th>
          
           <th>是否删除</th>
        </tr>
        <?php if(is_array($baPatho)): foreach($baPatho as $key=>$v): ?><tr>
		           <td><?php echo ($v["id"]); ?></td>
		           <td><?php echo ($v["pid"]); ?></td>
		           <td><?php echo ($v["name"]); ?></td>
		           <td><?php echo ($v["sex"]); ?></td>
		           <td><?php echo ($v["age"]); ?></td>
		           <td><?php echo ($v["exSmoke"]); ?></td>
		           <td><?php echo ($v["exFamily"]); ?></td>
		           <td><?php echo ($v["pathoDate"]); ?></td>
		           <td><?php echo ($v["pathoContent"]); ?></td>
		          
		           <td>
                      <?php if(ACTION_NAME == "index"): ?>[<a href='<?php echo U(GROUP_NAME."/BaPatho/change",array("id"=>$v["id"],"pid"=>$v["pid"]));?>'>修改</a>]
                          [<a href='<?php echo U(GROUP_NAME."/BaPatho/toTrash",array("id"=>$v["id"],"type"=>1));?>'>删除</a>]
                       <?php else: ?>
                          [<a href="<?php echo U(GROUP_NAME.'/BaPatho/toTrash',array('id'=>$v['id'],'type'=>0));?>">还原</a>]
                          [<a href="<?php echo U(GROUP_NAME.'/BaPatho/delete',array('id'=>$v['id']));?>">彻底删除</a>]<?php endif; ?>
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