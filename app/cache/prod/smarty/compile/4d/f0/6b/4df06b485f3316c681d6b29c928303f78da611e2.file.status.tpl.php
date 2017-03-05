<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:52:02
         compiled from "D:\php\prestashop\admin\themes\default\template\controllers\currencies\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:681358ba39e24ce680-23547793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4df06b485f3316c681d6b29c928303f78da611e2' => 
    array (
      0 => 'D:\\php\\prestashop\\admin\\themes\\default\\template\\controllers\\currencies\\status.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '681358ba39e24ce680-23547793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39e24ea630_23020088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39e24ea630_23020088')) {function content_58ba39e24ea630_23020088($_smarty_tpl) {?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel">
			<div class="panel-heading">
				<?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>

				<div id="currencyStatus" class="pull-right checkbox titatoggle unchecked-red checkbox-slider--b-flat">
					<label>
						<input type="checkbox" <?php echo 1==$_smarty_tpl->tpl_vars['status']->value ? 'checked="checked"' : '';?>
><span></span>
					</label>
				</div>
				<div class="clearfix"></div>
			</div>
			<span class="status disabled <?php echo 0==$_smarty_tpl->tpl_vars['status']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"This currency is disabled"),$_smarty_tpl);?>
</span>
			<span class="status enabled <?php echo 1==$_smarty_tpl->tpl_vars['status']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"This currency is enabled"),$_smarty_tpl);?>
</span>
		</div>
	</div>
</div>
<?php }} ?>
