<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:55
         compiled from "D:\php\prestashop\themes\classic\templates\catalog\_partials\products-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1044758ba39db15ee92-48380285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8ba9b10979298582949a419cf69501949b97664' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1044758ba39db15ee92-48380285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39db1aae70_93406719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39db1aae70_93406719')) {function content_58ba39db1aae70_93406719($_smarty_tpl) {?>
<div id="js-product-list-top" class="row products-selection">
  <div class="col-md-6 hidden-sm-down total-products">
    <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])>1) {?>
      <p><?php echo smartyTranslate(array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>count($_smarty_tpl->tpl_vars['listing']->value['products']))),$_smarty_tpl);?>
</p>
    <?php } else { ?>
      <p><?php echo smartyTranslate(array('s'=>'There is %product_count% product.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>count($_smarty_tpl->tpl_vars['listing']->value['products']))),$_smarty_tpl);?>
</p>
    <?php }?>
  </div>
  <div class="col-md-6">
    <div class="row sort-by-row">

      
        <?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0);?>

      

      <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
        <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
          <button id="search_filter_toggler" class="btn btn-secondary">
            <?php echo smartyTranslate(array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
        </div>
      <?php }?>
    </div>
  </div>
  <div class="col-sm-12 hidden-md-up text-xs-center showing">
    <?php echo smartyTranslate(array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl);?>

  </div>
</div>
<?php }} ?>
