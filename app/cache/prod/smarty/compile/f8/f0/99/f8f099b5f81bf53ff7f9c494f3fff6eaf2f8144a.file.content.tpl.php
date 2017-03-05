<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:52:02
         compiled from "D:\php\prestashop\admin\themes\default\template\controllers\currencies\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1828458ba39e22da6a3-68116283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8f099b5f81bf53ff7f9c494f3fff6eaf2f8144a' => 
    array (
      0 => 'D:\\php\\prestashop\\admin\\themes\\default\\template\\controllers\\currencies\\content.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1828458ba39e22da6a3-68116283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'isForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39e22e8610_71166688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39e22e8610_71166688')) {function content_58ba39e22e8610_71166688($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-10 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
	<div class="col-lg-2 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['isForm']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/conversion_rate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	</div>
</div><?php }} ?>
