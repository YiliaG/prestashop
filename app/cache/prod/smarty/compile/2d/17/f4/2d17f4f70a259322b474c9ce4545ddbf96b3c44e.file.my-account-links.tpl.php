<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:57
         compiled from "D:\php\prestashop\themes\classic\templates\customer\_partials\my-account-links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:425458ba39dd3bc664-45908511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d17f4f70a259322b474c9ce4545ddbf96b3c44e' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\customer\\_partials\\my-account-links.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '425458ba39dd3bc664-45908511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39dd3c67a5_27353083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39dd3c67a5_27353083')) {function content_58ba39dd3c67a5_27353083($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
  <i class="material-icons">&#xE5CB;</i>
  <span><?php echo smartyTranslate(array('s'=>'Back to your account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</span>
</a>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
  <i class="material-icons">&#xE88A;</i>
  <span><?php echo smartyTranslate(array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
</a>
<?php }} ?>
