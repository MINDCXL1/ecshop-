<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js,lizi_common.js')); ?>
<div id="header">
    <div class="hd_bar" id="userinfo-bar">
        <div class="bd">
            <div class="logo"><a href="index.php"><?php echo $this->_var['shop_name']; ?></a></div>
            <div class="hd_lbar" style="display: block;" id="ECS_MEMBERZONE">
               <?php 
$k = array (
  'name' => 'member_info2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </div>
            <ul class="hd-step">
                
                    <li <?php if ($this->_var['step'] == "cart"): ?>class="first on"<?php endif; ?>><em>1</em>我的购物车<i></i></li>
                    <li class="jt">&nbsp;</li>
                    <li <?php if ($this->_var['step'] == "checkout"): ?>class="first on"<?php endif; ?>><em>2</em>确认订单信息<i></i></li>
                    <li class="jt">&nbsp;</li>
                    <li <?php if ($this->_var['step'] == "done"): ?>class="first on"<?php endif; ?>><em>3</em>成功提交订单<i></i></li>
                

            </ul>
        </div>
    </div>
</div>