<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:52:06
         compiled from "D:\php\prestashop\admin\themes\default\template\controllers\modules\readmore-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3172158ba39e6e3f6b7-70872955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74f2b568319f2ef0bc87613758d72daf6fba9de6' => 
    array (
      0 => 'D:\\php\\prestashop\\admin\\themes\\default\\template\\controllers\\modules\\readmore-header.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3172158ba39e6e3f6b7-70872955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displayName' => 0,
    'version' => 0,
    'author' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39e6e48b91_68567924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39e6e48b91_68567924')) {function content_58ba39e6e48b91_68567924($_smarty_tpl) {?>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 class="modal-title">
	<div class="module_name">
		<a href="#" class="icon icon-chevron-left" onclick="openModulesList()"></a>
			<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>

			<small class="text-muted"><?php echo smartyTranslate(array('s'=>'v'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 - <?php echo smartyTranslate(array('s'=>'by'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</small>
	</div>
</h3>
<?php }} ?>
