<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:02:49
         compiled from "D:\php\prestashop\adminyilia\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:938058bcdf695b7658-65944719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f22bc7fc34676c82badb142a9a2a682cda6d451' => 
    array (
      0 => 'D:\\php\\prestashop\\adminyilia\\themes\\default\\template\\content.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '938058bcdf695b7658-65944719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bcdf6960e692_04713657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bcdf6960e692_04713657')) {function content_58bcdf6960e692_04713657($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
