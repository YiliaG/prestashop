<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:53
         compiled from "D:\php\prestashop\themes\classic\templates\catalog\_partials\miniatures\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1867758ba39d9eb25f0-87807507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0adc5229dd58dd004953237476127ad56d8dc901' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\category.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1867758ba39d9eb25f0-87807507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39d9ec7548_21880654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39d9ec7548_21880654')) {function content_58ba39d9ec7548_21880654($_smarty_tpl) {?>
<section class="category-miniature">
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
  </a>

  <h1 class="h2">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
  </h1>

  <div class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
</section>
<?php }} ?>
