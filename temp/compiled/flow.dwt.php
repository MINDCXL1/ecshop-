<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/lizi/cart.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_flow.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'lizi_flow.js')); ?> 
<?php if ($this->_var['step'] == "cart"): ?> 
 

<?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?> 
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div id="main">
  <div class="top-next cle">
    <div class="fr"> <a href="./" class="graybtn">继续购物</a> <a href="flow.php?step=checkout" class="btn" id="checkout-top">&nbsp;去结算&nbsp;</a> </div>
  </div>
  <div class="cart-box" id="cart-box">
    <div class="hd"> <span class="no2" id="itemsnum-top"><?php echo $this->_var['total']['goods_count']; ?>件商品</span> <span class="no4">单价</span> <span>数量</span> <span>小计</span> </div>
    <div class="goods-list">
      <ul>
        
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li class="cle hover" style="border-bottom-style: none;"> 
          
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
          
          <div class="pic"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"> <img alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a> </div>
          <div class="name"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?> 
            <?php if ($this->_var['show_goods_attribute'] == 1): ?> 
            <span style="color:#FF0000"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></span> 
            <?php endif; ?> 
            <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
            <?php endif; ?> 
            <?php if ($this->_var['goods']['is_gift'] > 0): ?> 
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
            <?php endif; ?></a>
            <p> </p>
          </div>
          
          <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
          <div class="pic"> <img src="themes/lizi/images/czlb.png"></div>
          <div class="name"> <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
            <p>
            
            <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none"> 
              <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
              <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
            </p>
          </div>
          <?php else: ?>
          <div class="pic"> <img src="themes/lizi/images/yhcx.png"></div>
          <div class="name"><?php echo $this->_var['goods']['goods_name']; ?>
            <p></p>
          </div>
          <?php endif; ?>
          <div class="price-xj">
            <p><em><?php echo $this->_var['goods']['goods_price']; ?></em></p>
          </div>
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
          <div class="nums"> <span class="minus" title="减少1个数量" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,-1);" >-</span>
            <input type="text" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>"  onchange="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,0)">
            <span class="add" title="增加1个数量" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,+1);">+</span> </div>
          <?php else: ?> 
         <div class="nums" style="text-indent:35px; font-size:14px;"> <?php echo $this->_var['goods']['goods_number']; ?> </div>
          <?php endif; ?>
          <div class="price-xj"><span></span> <em id="total_items_<?php echo $this->_var['goods']['rec_id']; ?>"><?php echo $this->_var['goods']['subtotal']; ?></em> </div>
          <div class="del"> <a class="btn-del" href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>';">删除</a> </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    
    <div class="fd cle">
      <div class="fl">
        <p class="no1"> <a id="del-all" href="flow.php?step=clear">清空购物车</a> </p>
        <p><a class="graybtn" href="./">继续购物</a></p>
      </div>
      <div class="fr" id="price-total">
        <p><span id="selectedCount"><?php echo $this->_var['total']['goods_count']; ?></span>件商品，总价：<span class="red"><strong id="totalSkuPrice"><?php echo $this->_var['total']['goods_price']; ?></strong></span></p>
        <p><a href="flow.php?step=checkout" class="btn">去结算</a></p>
      </div>
    </div>
  </div>
</div>

<?php if ($_SESSION['user_id'] > 0): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
<script type="text/javascript" charset="utf-8">
        function collect_to_flow(goodsId)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          goods.parent   = 0;
          Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), collect_to_flow_response, 'POST', 'JSON');
        }
        function collect_to_flow_response(result)
        {
          if (result.error > 0)
          {
            // 如果需要缺货登记，跳转
            if (result.error == 2)
            {
              if (confirm(result.message))
              {
                location.href = 'user.php?act=add_booking&id=' + result.goods_id;
              }
            }
            else if (result.error == 6)
            {
              openSpeDiv(result.message, result.goods_id);
            }
            else
            {
              alert(result.message);
            }
          }
          else
          {
            location.href = 'flow.php';
          }
        }
      </script>
</div>
<div class="blank"></div>
<?php endif; ?> 

<?php if ($this->_var['fittings_list']): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
<script type="text/javascript" charset="utf-8">
  function fittings_to_flow(goodsId,parentId)
  {
    var goods        = new Object();
    var spec_arr     = new Array();
    var number       = 1;
    goods.spec     = spec_arr;
    goods.goods_id = goodsId;
    goods.number   = number;
    goods.parent   = parentId;
    Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), fittings_to_flow_response, 'POST', 'JSON');
  }
  function fittings_to_flow_response(result)
  {
    if (result.error > 0)
    {
      // 如果需要缺货登记，跳转
      if (result.error == 2)
      {
        if (confirm(result.message))
        {
          location.href = 'user.php?act=add_booking&id=' + result.goods_id;
        }
      }
      else if (result.error == 6)
      {
        openSpeDiv(result.message, result.goods_id, result.parent);
      }
      else
      {
        alert(result.message);
      }
    }
    else
    {
      location.href = 'flow.php';
    }
  }
  </script>
  <div class="page-btm" id="page-btm">

    


    
        <div class="cuxiao-box">
            <div class="hd">
                <h3><?php echo $this->_var['lang']['goods_fittings']; ?></h3>
                
            </div>
            <form action="flow.php" method="post">
            <div class="cuxiao-bd">
                
                    <ul class="cle" style="display: block;">
                        
                             <?php $_from = $this->_var['fittings_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings');if (count($_from)):
    foreach ($_from AS $this->_var['fittings']):
?>
                            <li>
                                <div class="bd">
                                    <p class="pic">
                                        <a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank">
                                            <img alt="<?php echo htmlspecialchars($this->_var['fittings']['name']); ?>" src="<?php echo $this->_var['fittings']['goods_thumb']; ?>" style="display: inline;">
                                        </a>
                                    </p>
                                    <p class="price"><strong><?php echo $this->_var['fittings']['fittings_price']; ?></strong></p>
                                    <p class="name"><a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['fittings']['short_name']); ?></a></p>
               
                                </div>

                                <div class="btn-bd">
                                    <a href="javascript:fittings_to_flow(<?php echo $this->_var['fittings']['goods_id']; ?>,<?php echo $this->_var['fittings']['parent_id']; ?>)" class="graybtn">放入购物车</a>
                                </div>
                            </li>
                        
                           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                        
                    </ul>
                
              
                
            </div>
            </form>
        </div>
    

</div>

<?php endif; ?> 

<?php endif; ?> 

<?php if ($this->_var['favourable_list']): ?>
<div class="flowBox cart_main2" style="margin:0 auto 50px auto;">
  <h6 style="padding:10px 15px 10px 0;border: 1px solid #ccc;border-bottom:none;background-color: #f1f1f1;"><span style="font-size:16px;font-weight:400;"><?php echo $this->_var['lang']['label_favourable']; ?></span></h6>
  <?php $_from = $this->_var['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'favourable');if (count($_from)):
    foreach ($_from AS $this->_var['favourable']):
?>
  <form action="flow.php" method="post">
    <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#ccc" style="margin:0 auto;">
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_name']; ?></td>
        <td bgcolor="#ffffff"><strong><?php echo $this->_var['favourable']['act_name']; ?></strong></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_period']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['start_time']; ?> --- <?php echo $this->_var['favourable']['end_time']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_range']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['lang']['far_ext'][$this->_var['favourable']['act_range']]; ?><br />
          <?php echo $this->_var['favourable']['act_range_desc']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_amount']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['formated_min_amount']; ?> --- <?php echo $this->_var['favourable']['formated_max_amount']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_type']; ?></td>
        <td bgcolor="#ffffff"><span class="STYLE1"><?php echo $this->_var['favourable']['act_type_desc']; ?></span> 
          <?php if ($this->_var['favourable']['act_type'] == 0): ?> 
          <?php $_from = $this->_var['favourable']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gift');if (count($_from)):
    foreach ($_from AS $this->_var['gift']):
?><br />
          <input type="checkbox" value="<?php echo $this->_var['gift']['id']; ?>" name="gift[]" />
          <a href="goods.php?id=<?php echo $this->_var['gift']['id']; ?>" target="_blank" class="f6"><?php echo $this->_var['gift']['name']; ?></a> [<?php echo $this->_var['gift']['formated_price']; ?>] 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endif; ?></td>
      </tr>
      <?php if ($this->_var['favourable']['available']): ?>
            <tr>
              <td align="right" bgcolor="#ffffff">&nbsp;</td>
              <td align="center" bgcolor="#ffffff"><input type="submit" class="btn" alt="Add to cart"  border="0" style="font-size: 16px;
padding: 10px 20px 12px; height:auto; cursor:pointer; border:none;" value="加入购物车" /></td>
            </tr>
            <?php endif; ?>
    </table>
    <input type="hidden" name="act_id" value="<?php echo $this->_var['favourable']['act_id']; ?>" />
    <input type="hidden" name="step" value="add_favourable" />
  </form>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>

<?php endif; ?> 

<?php if ($this->_var['step'] == "consignee"): ?>
<div class="cle cart_main"> 
   
  <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?> 
  <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>
  <div class="aui_outer"> 
     
    <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
    <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
      <?php echo $this->fetch('library/consignee.lbi'); ?>
    </form>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
  </div>
</div>
<?php endif; ?> 

<?php if ($this->_var['step'] == "checkout"): ?>
<div class="cle cart_main">
  <div class="flowBox_cart">
    <h6><span style="padding-left:0px;">确认订单信息页面</span></h6>
    <div class="flowBox_in">
      <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
        </script>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['goods_list']; ?></span><?php if ($this->_var['allow_edit_cart']): ?><a href="flow.php" class="f16">返回修改购物车</a><?php endif; ?></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <th bgcolor="#f5f5f5"><?php echo $this->_var['lang']['goods_name']; ?></th>
              <th bgcolor="#f5f5f5"><?php echo $this->_var['lang']['goods_attr']; ?></th>
              <?php if ($this->_var['show_marketprice']): ?>
              <th bgcolor="#f5f5f5"><?php echo $this->_var['lang']['market_prices']; ?></th>
              <?php endif; ?>
              <th bgcolor="#f5f5f5"><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?></th>
              <th bgcolor="#f5f5f5"><?php echo $this->_var['lang']['number']; ?></th>
              <th bgcolor="#f5f5f5"><?php echo $this->_var['lang']['subtotal']; ?></th>
            </tr>
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <tr>
              <td bgcolor="#ffffff"><?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?> 
                <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none"> 
                  <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
                  <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                </div>
                
                <?php else: ?> 
                <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a> 
                <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
                <?php elseif ($this->_var['goods']['is_gift']): ?> 
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
                <?php endif; ?> 
                <?php endif; ?> 
                <?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?></td>
              <td bgcolor="#ffffff"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
              <?php if ($this->_var['show_marketprice']): ?>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['goods']['formated_market_price']; ?></td>
              <?php endif; ?>
              <td bgcolor="#ffffff" align="right"><?php echo $this->_var['goods']['formated_goods_price']; ?></td>
              <td bgcolor="#ffffff" align="right"><?php echo $this->_var['goods']['goods_number']; ?></td>
              <td bgcolor="#ffffff" align="right"><?php echo $this->_var['goods']['formated_subtotal']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php if (! $this->_var['gb_deposit']): ?>
            <tr>
              <td bgcolor="#ffffff" colspan="7"><?php if ($this->_var['discount'] > 0): ?><?php echo $this->_var['your_discount']; ?><br />
                
                <?php endif; ?> 
                <?php echo $this->_var['shopping_money']; ?><?php if ($this->_var['show_marketprice']): ?>，<?php echo $this->_var['market_price_desc']; ?><?php endif; ?></td>
            </tr>
            <?php endif; ?>
          </table>
        </div>
        <div class="blank"></div>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['consignee_info']; ?></span><a href="flow.php?step=consignee" class="f16">返回修改收货地址</a></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td bgcolor="#f5f5f5"><?php echo $this->_var['lang']['consignee_name']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></td>
			  <td bgcolor="#f5f5f5"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['address']); ?> </td>
            </tr>
            <tr>
              <td bgcolor="#f5f5f5"><?php echo $this->_var['lang']['backup_phone']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?></td>
			  <td bgcolor="#f5f5f5"><?php echo $this->_var['lang']['phone']; ?>:</td>
              <td bgcolor="#ffffff"><?php echo $this->_var['consignee']['tel']; ?> </td>
            </tr>
          </table>
        </div>
        <div class="blank"></div>
        <?php if ($this->_var['total']['real_goods_count'] != 0): ?>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['shipping_method']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="shippingTable">
            <tr>
              <th bgcolor="#f5f5f5" width="5%">&nbsp;</th>
              <th bgcolor="#f5f5f5" width="25%"><?php echo $this->_var['lang']['name']; ?></th>
              <th bgcolor="#f5f5f5"><?php echo $this->_var['lang']['describe']; ?></th>
              <th bgcolor="#f5f5f5" width="15%"><?php echo $this->_var['lang']['fee']; ?></th>
              <th bgcolor="#f5f5f5" width="15%"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th bgcolor="#f5f5f5" width="15%"><?php echo $this->_var['lang']['insure_fee']; ?></th>
            </tr>
            <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
            <tr>
              <td bgcolor="#ffffff" align="center"><input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" /></td>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['shipping']['shipping_name']; ?></strong></td>
              <td bgcolor="#ffffff" valign="top"><?php echo $this->_var['shipping']['shipping_desc']; ?></td>
              <td bgcolor="#ffffff" align="right" valign="top"><?php echo $this->_var['shipping']['format_shipping_fee']; ?></td>
              <td bgcolor="#ffffff" align="right" valign="top"><?php echo $this->_var['shipping']['free_money']; ?></td>
              <td bgcolor="#ffffff" align="right" valign="top"><?php if ($this->_var['shipping']['insure'] != 0): ?><?php echo $this->_var['shipping']['insure_formated']; ?><?php else: ?><?php echo $this->_var['lang']['not_support_insure']; ?><?php endif; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td colspan="6" bgcolor="#ffffff" align="right"><label for="ECS_NEEDINSURE">
                  <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?>  />
                  <?php echo $this->_var['lang']['need_insure']; ?> </label></td>
            </tr>
          </table>
        </div>
        <div class="blank"></div>
        <?php else: ?>
        <input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
        <?php endif; ?> 
        <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['payment_method']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="paymentTable">
            <tr>
              <th width="5%" bgcolor="#ffff99">&nbsp;</th>
              <th width="20%" bgcolor="#ffff99"><?php echo $this->_var['lang']['name']; ?></th>
              <th bgcolor="#ffff99"><?php echo $this->_var['lang']['describe']; ?></th>
              <th bgcolor="#ffff99" width="15%"><?php echo $this->_var['lang']['pay_fee']; ?></th>
            </tr>
            <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?> 
            
            <tr>
              <td bgcolor="#ffffff"><input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" id="pay_check_value_<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/></td>
              <td bgcolor="#ffffff"><label class="pay_label" for="pay_check_value_<?php echo $this->_var['payment']['pay_id']; ?>"><?php echo $this->_var['payment']['pay_name']; ?></label></td>
              <td valign="top" bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_desc']; ?></td>
              <td align="right" bgcolor="#ffffff" valign="top"><?php echo $this->_var['payment']['format_pay_fee']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
        </div>
        <?php else: ?>
        <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
        <?php endif; ?>
        <div class="blank"></div>
        <?php if ($this->_var['pack_list']): ?>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['goods_package']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="packTable">
            <tr>
              <th width="5%" scope="col" bgcolor="#ffffff">&nbsp;</th>
              <th width="35%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['name']; ?></th>
              <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['price']; ?></th>
              <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /></td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['no_pack']; ?></strong></td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');if (count($_from)):
    foreach ($_from AS $this->_var['pack']):
?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /></td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['pack']['pack_name']; ?></strong></td>
              <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_pack_fee']; ?></td>
              <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_free_money']; ?></td>
              <td valign="top" bgcolor="#ffffff" align="center"><?php if ($this->_var['pack']['pack_img']): ?> 
                <a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a> 
                <?php else: ?> 
                <?php echo $this->_var['lang']['no']; ?> 
                <?php endif; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
        </div>
        <div class="blank"></div>
        <?php endif; ?> 
        
        <?php if ($this->_var['card_list']): ?>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['goods_card']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="cardTable">
            <tr>
              <th bgcolor="#ffffff" width="5%" scope="col">&nbsp;</th>
              <th bgcolor="#ffffff" width="35%" scope="col"><?php echo $this->_var['lang']['name']; ?></th>
              <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['price']; ?></th>
              <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th bgcolor="#ffffff" scope="col"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td bgcolor="#ffffff" valign="top"><input type="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" /></td>
              <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['no_card']; ?></strong></td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)"  /></td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['card']['card_name']; ?></strong></td>
              <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_card_fee']; ?></td>
              <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_free_money']; ?></td>
              <td valign="top" align="center" bgcolor="#ffffff"><?php if ($this->_var['card']['card_img']): ?> 
                <a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a> 
                <?php else: ?> 
                <?php echo $this->_var['lang']['no']; ?> 
                <?php endif; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td bgcolor="#ffffff"></td>
              <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['bless_note']; ?>:</strong></td>
              <td bgcolor="#ffffff" colspan="3"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['card_message']); ?></textarea></td>
            </tr>
          </table>
        </div>
        <div class="blank"></div>
        <?php endif; ?>
        
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['other_info']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <?php if ($this->_var['allow_use_surplus']): ?>
            <tr>
              <td width="20%" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_surplus']; ?>: </strong></td>
              <td bgcolor="#ffffff"><input name="surplus" type="text" class="inputBg" id="ECS_SURPLUS" size="10" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onblur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
                <?php echo $this->_var['lang']['your_surplus']; ?><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?> <span id="ECS_SURPLUS_NOTICE" class="notice"></span></td>
            </tr>
            <?php endif; ?> 
            <?php if ($this->_var['allow_use_integral']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_integral']; ?></strong></td>
              <td bgcolor="#ffffff"><input name="integral" type="text" class="input" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" />
                <?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?>. <span id="ECS_INTEGRAL_NOTICE" class="notice"></span></td>
            </tr>
            <?php endif; ?> 
            <?php if ($this->_var['allow_use_bonus']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_bonus']; ?>:</strong></td>
              <td bgcolor="#ffffff"> <?php echo $this->_var['lang']['select_bonus']; ?>
                <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
                  <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                  <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                  <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </select>
                <?php echo $this->_var['lang']['input_bonus_no']; ?>
                <input name="bonus_sn" type="text" class="inputBg" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
                <input name="validate_bonus" type="button" class="bnt_blue_1" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" /></td>
            </tr>
            <?php endif; ?> 
            <?php if ($this->_var['inv_content_list']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['invoice']; ?>:</strong>
                <input name="need_inv" type="checkbox"  class="input" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> /></td>
              <td bgcolor="#ffffff"><?php if ($this->_var['inv_type_list']): ?> 
                <?php echo $this->_var['lang']['invoice_type']; ?>
                <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" style="border:1px solid #ccc;">
                  
                  
                  
                  
                <?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?>
                
                
                
                </select>
                
                <?php endif; ?> 
                <?php echo $this->_var['lang']['invoice_title']; ?>
                <input name="inv_payee" type="text"  class="input" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" />
                <?php echo $this->_var['lang']['invoice_content']; ?>
                <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" style="border:1px solid #ccc;">
                  
                  
                  
                  

                <?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>

                
                
                
                
                </select></td>
            </tr>
            <?php endif; ?>
            <tr>
              <td valign="top" bgcolor="#f5f5f5"><strong><?php echo $this->_var['lang']['order_postscript']; ?>:</strong></td>
              <td bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea></td>
            </tr>
            <?php if ($this->_var['how_oos_list']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['booking_process']; ?>:</strong></td>
              <td bgcolor="#ffffff"><?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
                
                <label>
                  <input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onclick="changeOOS(this)" />
                  <?php echo $this->_var['how_oos_name']; ?></label>
                
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
            </tr>
            <?php endif; ?>
          </table>
        </div>
        <div class="blank"></div>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['fee_total']; ?></span></h6>
          <?php echo $this->fetch('library/order_total.lbi'); ?>
          <div align="center" style="margin:8px auto;">
            <input type="image" src="themes/lizi/images/bnt_subOrder.gif" />
            <input type="hidden" name="step" value="done" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endif; ?> 

<?php if ($this->_var['step'] == "done"): ?> 

<div class="cle cart_main">
  <div class="flowBox" style="margin:30px auto 30px auto; border:none;">
   	<div class="flow_fastcg">
		<div class="xian">
			<p class="xian1"><span><?php echo $this->_var['lang']['remember_order_number']; ?>: <?php echo $this->_var['order']['order_sn']; ?></span></p>
			<p class="xian2"><?php echo $this->_var['lang']['select_shipping']; ?>: <font style="padding-right:30px;"><?php echo $this->_var['order']['shipping_name']; ?></font><?php echo $this->_var['lang']['select_payment']; ?>: <font  style="padding-right:30px;"><?php echo $this->_var['order']['pay_name']; ?></font><?php echo $this->_var['lang']['order_amount']; ?>: <font><b><?php echo $this->_var['total']['amount_formated']; ?></b></font></p>
			<?php if ($this->_var['pay_online']): ?> 
      		
			<div class="online1">
				<b>还差一步,请立即支付,(支付成功后,我们将在<span style="color:#cc0001;padding:0px 5px; font-size:16px;">24小时</span>内为您发货）</b>
				<br><br>
				<?php echo $this->_var['pay_online']; ?>
				<br><br>
			</div>
			<div class="wcwxts">
				<p class="wxts1">温馨提示</p>
				<div class="wxtsny">
					<p><b style="color:#cc0001">如果支付遇到问题？</b>请拨打：<?php echo $this->_var['service_phone']; ?>，由客服协助您完成支付。</p>
				</div>
			</div>
			<?php else: ?> 
			<div class="online1">
				<b>请保持电话畅通，方便快递公司与您联系，我们将在<span style="color:#cc0001;padding:0px 5px; font-size:16px;">24小时</span>内为您发货。</b>
				<br><br>
			</div>
			<div class="wcwxts">
				<p class="wxts1">温馨提示</p>
				<div class="wxtsny">
					<p><b style="color:#cc0001">如果遇到问题？</b>请拨打：<?php echo $this->_var['service_phone']; ?>，由客服协助您完成订单。</p>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
    <?php if ($this->_var['virtual_card']): ?>
    <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;"> 
      <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
      <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
      <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
      <ul style="list-style:none;padding:0;margin:0;clear:both">
        <?php if ($this->_var['card']['card_sn']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['card_password']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['end_date']): ?>
        <li style="float:left;"> <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?> </li>
        <?php endif; ?>
      </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php endif; ?>
    <p style="text-align:center; margin-bottom:20px;">您可以 <a href="index.html">返回首页</a> 或去 <a href="user.php">用户中心</a></p>
  </div>
</div>
<?php endif; ?> 
<?php if ($this->_var['step'] == "login"): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?> 
<script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		$(function(){
			$(".input_box").click(function(){
				$(this).find(".t_text").hide();	
				$(this).find("input").focus();
			})
			
			$(".input_box").focusin(function(){
				$(this).find(".t_text").hide();
			})
		
			$(".input_box").focusout(function(){
				if($(this).find("input").val() == "")
				{
					$(this).find(".t_text").show();
				}
			})	
		})

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        

        </script> 


<div class="cle cart_main">
  <div class="g_box from_com" style="float:left;">
    <div id="login-box">
      <h2>
        <div class="trig">没有帐号？<a href="user.php?act=register" class="trigger-box">点击注册</a></div>
        登录</h2>
      <div class="form-bd" style="height:auto;">
        <div class="form_box cle" id="login-nala">
          <div class="login_box" id="login-nala-form" >
            <form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
              <ul class="form">
                <li class="text_input"><span class="error_icon"></span><span class="iconfont">?</span>
                  <input name="username" type="text"  class="text" placeholder="<?php echo $this->_var['lang']['label_username']; ?>"/>
                </li>
                <li class="text_input"><span class="error_icon"></span><span class="iconfont">÷</span>
                  <input name="password" type="password" class="text" placeholder="<?php echo $this->_var['lang']['label_password']; ?>"/>
                </li>
                <?php if ($this->_var['enabled_login_captcha']): ?>
                <li class="security_code input_box"> <span class="t_text"><?php echo $this->_var['lang']['comment_captcha']; ?></span>
                  <input type="text" class="code_input" name="captcha" maxlength="6">
                  <span class="error_icon"></span> <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></li>
                <div class="blank" style="height:20px;"> </div>
                <?php endif; ?>
                
                <li class="login_param">
                  <p><a class="forget_psd" href="user.php?act=get_password">忘记密码?</a>
                    <label>
                      <input type="checkbox" value="1" name="remember" id="remember" class="remember-me">
                      <?php echo $this->_var['lang']['remember']; ?></label>
                  </p>
                </li>
                <li class="last" style="margin-bottom:0;">
                  <input type="submit" name="submit" class="btn" value="登 录">
                  <input name="act" type="hidden" value="signin" />
                </li>
                <li class="last"> 
                  
                  <?php if ($this->_var['anonymous_buy'] == 1): ?>
                  <input type="button" class="btn" value="<?php echo $this->_var['lang']['direct_shopping']; ?>" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
                  <?php endif; ?> 
                  
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="g_box">
    <div id="register_box">
      <form action="flow.php?step=login" method="post" name="formUser" id="registerForm" onsubmit="return checkSignupForm(this)">
        <h2>
          <div class="trig">已有账号? <a href="user.php" class="trigger-box">点击登录</a> </div>
          注册 </h2>
        <div class="register_infor">
          <input type="hidden" id="sendtype">
          <ul>
            <li class="input_box"> <span class="t_text"><?php echo $this->_var['lang']['label_username']; ?></span>
              <input type="text" name="username" id="username" onblur="is_registered(this.value);" onkeyup="is_registered(this.value);">
              <span class="error_icon"></span> </li>
            <li class="error_box" id="username_notice"> <em></em> </li>
            <li class="input_box"> <span class="t_text"><?php echo $this->_var['lang']['label_email']; ?></span>
              <input name="email" type="text" id="email" onblur="checkEmail(this.value);" onkeyup="checkEmail(this.value);">
              <span class="error_icon"></span> </li>
            <li class="error_box" id="email_notice"><em></em> </li>
            <li class="input_box"> <span class="t_text"><?php echo $this->_var['lang']['label_password']; ?></span>
              <input type="password" name="password" id="password1" onblur="check_password(this.value);" onkeyup="check_password(this.value);checkIntensity(this.value);">
              <span class="error_icon"></span> </li>
            <li class="error_box" id="password_notice"> <em></em> </li>
            <li class="input_box"> <span class="t_text"><?php echo $this->_var['lang']['label_confirm_password']; ?></span>
              <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);" onkeyup="check_conform_password(this.value);">
              <span class="error_icon"></span> </li>
            <li class="error_box" id="conform_password_notice"> <em></em> </li>
            
            <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?> 
            
            <?php if ($this->_var['field']['id'] == 6): ?>
            <select name='sel_question'>
              <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
              <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
            </select>
            <li class="blank" style="height:10px;"></li>
            <li class="input_box"> <span class="t_text" <?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>><?php echo $this->_var['lang']['passwd_answer']; ?></span>
              <input name="passwd_answer" type="text"/>
              <span class="error_icon"></span> </li>
            <?php if ($this->_var['field']['is_need']): ?>
            <li class="error_box"> <em></em> </li>
            <?php endif; ?> 
            
            <?php else: ?>
            <li class="input_box"> <span class="t_text" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?></span>
              <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text"/>
              <span class="error_icon"></span></li>
            <?php if ($this->_var['field']['is_need']): ?>
            <li class="error_box"><em></em></li>
            <?php endif; ?> 
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            
            <?php if ($this->_var['enabled_register_captcha']): ?>
            <li class="security_code input_box"> <span class="t_text">验证码</span>
              <input type="text" class="code_input" name="captcha" maxlength="6">
              <span class="error_icon"></span> <img src="captcha.php?<?php echo $this->_var['rand']; ?>" /> </li>
            <li class="error_box"> <em></em> </li>
            <?php endif; ?>
            <li class="lizi_law">
              <label>
                <input name="agreement" type="checkbox" value="1" checked="checked"  tabindex="5" class="remember-me"/>
                <?php echo $this->_var['lang']['agreement']; ?></label>
            </li>
            <li class="error_box"> <em></em> </li>
            <li class="go2register">
              <input type="submit" name="Submit" class="btn submit_btn" value="<?php echo $this->_var['lang']['forthwith_register']; ?>" />
              <input name="act" type="hidden" value="signup" />
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</div>

 
<?php endif; ?> 

<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>
