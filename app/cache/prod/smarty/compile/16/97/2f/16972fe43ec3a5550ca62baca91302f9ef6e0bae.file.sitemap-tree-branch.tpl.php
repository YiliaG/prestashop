<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:56
         compiled from "D:\php\prestashop\themes\classic\templates\cms\_partials\sitemap-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2152658ba39dcdb3523-25286870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16972fe43ec3a5550ca62baca91302f9ef6e0bae' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\cms\\_partials\\sitemap-tree-branch.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2152658ba39dcdb3523-25286870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39dcddf416_33481147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39dcddf416_33481147')) {function content_58ba39dcddf416_33481147($_smarty_tpl) {?>
<li>
  <a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a>
  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate ('cms/_partials/sitemap-tree-branch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

      <?php } ?>
    </ul>
  <?php }?>
</li>
<?php }} ?>
