
<?php if ($this->_var['user_info']): ?> 
<a href="./"><?php echo $this->_var['shop_name']; ?>首页</a> <a href="user.php" class="usernav-link"><img src="themes/lizi/images/kong.gif"><span><?php echo $this->_var['user_info']['username']; ?></span></a> <a href="user.php?act=logout">退出</a> 
<?php else: ?> 
<a href="./" rel="nofollow"><?php echo $this->_var['shop_name']; ?>首页</a> <a href="user.php?act=login"><i class="iconfont">Œ</i>登 录</a> <a href="user.php?act=register">注册</a>
<?php endif; ?>