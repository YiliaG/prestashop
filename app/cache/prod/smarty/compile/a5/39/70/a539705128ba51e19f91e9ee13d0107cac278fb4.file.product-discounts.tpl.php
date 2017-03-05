<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:54
         compiled from "D:\php\prestashop\themes\classic\templates\catalog\_partials\product-discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1558658ba39da982f22-37657108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a539705128ba51e19f91e9ee13d0107cac278fb4' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-discounts.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558658ba39da982f22-37657108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'configuration' => 0,
    'quantity_discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39da9a4293_36186728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39da9a4293_36186728')) {function content_58ba39da9a4293_36186728($_smarty_tpl) {?>
<section class="product-discounts">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_discounts']) {?>
    <h3 class="h6 product-discounts-title"><?php echo smartyTranslate(array('s'=>'Volume discounts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h3>
    <table class="table-product-discounts">
      <thead>
      <tr>
        <th><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
        <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['quantity_discount']['label'], ENT_QUOTES, 'UTF-8');?>
</th>
        <th><?php echo smartyTranslate(array('s'=>'You Save','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
      </tr>
      </thead>
      <tbody>
      <?php  $_smarty_tpl->tpl_vars['quantity_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity_discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['quantity_discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->key => $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->_loop = true;
?>
        <tr data-discount-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'], ENT_QUOTES, 'UTF-8');?>
" data-discount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'], ENT_QUOTES, 'UTF-8');?>
" data-discount-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
">
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['discount'], ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php echo smartyTranslate(array('s'=>'Up to %discount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%discount%'=>$_smarty_tpl->tpl_vars['quantity_discount']->value['save'])),$_smarty_tpl);?>
</td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  <?php }?>
</section>
<?php }} ?>
