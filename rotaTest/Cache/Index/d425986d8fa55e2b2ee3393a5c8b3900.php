<?php if (!defined('THINK_PATH')) exit();?><div class="continer" >
    <div class="head" style="background-color:rgb(217,237,247);height:50px;vertical-align:middle"><h2  style="color: rgb(81,117,114)">欢迎您的留言</h2></div>
    <div class="body">
        <?php if(is_array($guestbook)): $i = 0; $__LIST__ = $guestbook;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel">
                <div class="panel-head" style="background-color: rgb(223,240,216)">
                    <span class="nickname" style="color: rgb(104,148,99)">留言者: <?php echo ($vo["nickname"]); ?></span>
                    <span style="color: rgb(104,148,99)">|</span>
                    <span class="email" style="color: rgb(104,148,99)">邮箱: <?php echo ($vo["email"]); ?></span>
                    <span class="time" style="float: right;color: rgb(104,148,99)">时间: <?php echo ($vo["replytime"]); ?></span>
                </div>
                <div class="panel-body">
                    <span class="content">内容: <?php echo ($vo["content"]); ?></span>
                    <span class="time" style="float: right"><?php echo ($vo["id"]); ?>楼</span>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="foot">
        <form method="post" action="<?php echo U('Index/Remark/remarkInfo');?>">
            <div class="panel" style="background-color: rgb(245,245,245)">
                <div class="panel-body" style="padding:30px; width: 20%">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input id="nickname" type="text" class="input" name="nickname" placeholder="用户名"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" id="content" class="input" name="content" placeholder="留言内容"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <span></span>
                        <span class="field">
                            <input type="text" id="email" class="input" name="email" placeholder="Email"/>
                        </span>
                    </div>
                    <div class="form-group">
                        <span><button name="liuyan">留言</button></span>
                        <span><button name="restart" onclick="clearDefaultText(this)">重置</button></span>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<script>
function clearDefaultText(){
    var nickname = document.getElementById('nickname');
    var content = document.getElementById('content');
    var email = document.getElementById('email');
    nickname.value="";
    content.value="";
    email.value="";
}
</script>