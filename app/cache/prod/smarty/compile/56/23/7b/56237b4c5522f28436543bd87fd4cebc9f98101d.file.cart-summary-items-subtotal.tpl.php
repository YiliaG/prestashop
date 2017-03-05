<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:56
         compiled from "D:\php\prestashop\themes\classic\templates\checkout\_partials\cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1293758ba39dc05d9a0-54760174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56237b4c5522f28436543bd87fd4cebc9f98101d' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1293758ba39dc05d9a0-54760174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39dc069735_07036151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39dc069735_07036151')) {function content_58ba39dc069735_07036151($_smarty_tpl) {?>
<div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
  <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php }} ?>
