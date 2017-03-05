<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:53
         compiled from "D:\php\prestashop\themes\classic\modules\ps_searchbar\ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2376058ba39d92f54f0-60874505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38b2d1c38d04aaabfa9dc7fa3c02f74d7bbe86e8' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\modules\\ps_searchbar\\ps_searchbar.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2376058ba39d92f54f0-60874505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39d92fd016_30509409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39d92fd016_30509409')) {function content_58ba39d92fd016_30509409($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
		<button type="submit">
			<i class="material-icons search">&#xE8B6;</i>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
