<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:53
         compiled from "D:\php\prestashop\themes\classic\modules\ps_shoppingcart\ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3020458ba39d97b9851-64432614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a66421fc874790e03a14375d3d9e375f30a2e0' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\modules\\ps_shoppingcart\\ps_shoppingcart.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3020458ba39d97b9851-64432614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'refresh_url' => 0,
    'cart_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39d97e9917_02743530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39d97e9917_02743530')) {function content_58ba39d97e9917_02743530($_smarty_tpl) {?><div id="_desktop_cart">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <i class="material-icons shopping-cart">shopping_cart</i>
        <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
        <span class="cart-products-count">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div>
<?php }} ?>
