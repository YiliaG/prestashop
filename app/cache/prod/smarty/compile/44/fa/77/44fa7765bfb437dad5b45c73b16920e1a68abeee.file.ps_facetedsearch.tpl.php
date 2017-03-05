<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:52
         compiled from "D:\php\prestashop\themes\classic\modules\ps_facetedsearch\ps_facetedsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1227858ba39d8c46066-05207459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44fa7765bfb437dad5b45c73b16920e1a68abeee' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\modules\\ps_facetedsearch\\ps_facetedsearch.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1227858ba39d8c46066-05207459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39d8c546b2_09119329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39d8c546b2_09119329')) {function content_58ba39d8c546b2_09119329($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
<div id="search_filters_wrapper" class="hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <span id="_mobile_search_filters_clear_all"></span>
      <button class="btn btn-secondary ok">
        <i class="material-icons">&#xE876;</i>
        <?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </button>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }?>
<?php }} ?>
