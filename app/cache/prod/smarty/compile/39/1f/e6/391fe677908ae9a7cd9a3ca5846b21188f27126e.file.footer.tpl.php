<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:58
         compiled from "D:\php\prestashop\themes\classic\templates\_partials\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2442458ba39de833284-62815553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '391fe677908ae9a7cd9a3ca5846b21188f27126e' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\_partials\\footer.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2442458ba39de833284-62815553',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39de84c0d1_72381047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39de84c0d1_72381047')) {function content_58ba39de84c0d1_72381047($_smarty_tpl) {?>
<div class="container">
  <div class="row">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

    </div>
    <div class="row">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

    </div>
    <div class="row">
      <div class="col-md-12">
        <p>
          <a class="_blank" href="http://www.prestashop.com" target="_blank">
            <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl);?>

          </a>
        </p>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
