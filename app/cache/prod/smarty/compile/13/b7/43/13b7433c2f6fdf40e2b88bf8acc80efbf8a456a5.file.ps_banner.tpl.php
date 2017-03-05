<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:52
         compiled from "D:\php\prestashop\themes\classic\modules\ps_banner\ps_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:904958ba39d84e13e6-55037441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13b7433c2f6fdf40e2b88bf8acc80efbf8a456a5' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\modules\\ps_banner\\ps_banner.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '904958ba39d84e13e6-55037441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39d84ef392_85794711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39d84ef392_85794711')) {function content_58ba39d84ef392_85794711($_smarty_tpl) {?>
<a class="banner hidden-sm-down" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
  <?php } else { ?>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<?php }} ?>
