<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:54
         compiled from "D:\php\prestashop\themes\classic\templates\catalog\_partials\miniatures\pack-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2625058ba39da012b92-47481893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf86832e66f5ff66eafabcd1e8885721b3b436f' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\pack-product.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2625058ba39da012b92-47481893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39da021918_96524009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39da021918_96524009')) {function content_58ba39da021918_96524009($_smarty_tpl) {?>
<article>
  <div class="card">
    <div class="pack-product-container">
      <div class="thumb-mask">
        <div class="mask">
          <img
            src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
            alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
            data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </div>
      </div>
      <div class="pack-product-name">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="pack-product-price">
        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</strong>
      </div>
      <div class="pack-product-quantity">
        <span>x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['pack_quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    </div>
  </div>
</article>
<?php }} ?>
