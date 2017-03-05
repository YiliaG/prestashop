<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:52:13
         compiled from "D:\php\prestashop\admin\themes\default\template\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3045858ba39edc70570-83374759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc4d05ee69a123395497330623c9f24555ae4ad' => 
    array (
      0 => 'D:\\php\\prestashop\\admin\\themes\\default\\template\\error.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3045858ba39edc70570-83374759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'php_errors' => 0,
    'php_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39edc90bd5_64738312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39edc90bd5_64738312')) {function content_58ba39edc90bd5_64738312($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)&&count($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
<div class="bootstrap">
	<div id="error-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="alert alert-danger clearfix">
				<?php  $_smarty_tpl->tpl_vars['php_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['php_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['php_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['php_error']->key => $_smarty_tpl->tpl_vars['php_error']->value) {
$_smarty_tpl->tpl_vars['php_error']->_loop = true;
?>
					<?php echo smartyTranslate(array('s'=>'%1$s on line %2$s in file %3$s','sprintf'=>array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['type']),$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errline']),$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errfile']))),$_smarty_tpl);?>
<br />
					[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errno']);?>
] <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errstr']);?>
<br /><br />
				<?php } ?>
				<button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="icon-remove"></i> Close</button>
			</div>
		</div>
	</div>
</div>
<?php }?><?php }} ?>
