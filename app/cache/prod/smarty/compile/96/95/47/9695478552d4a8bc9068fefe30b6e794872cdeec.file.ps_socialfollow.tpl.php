<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:53
         compiled from "D:\php\prestashop\themes\classic\modules\ps_socialfollow\ps_socialfollow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1344558ba39d988b8c7-13394500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9695478552d4a8bc9068fefe30b6e794872cdeec' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\modules\\ps_socialfollow\\ps_socialfollow.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1344558ba39d988b8c7-13394500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'social_links' => 0,
    'social_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39d98a1530_17541417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39d98a1530_17541417')) {function content_58ba39d98a1530_17541417($_smarty_tpl) {?>


  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['social_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['social_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->key => $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->_loop = true;
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
      <?php } ?>
    </ul>
  </div>

<?php }} ?>
