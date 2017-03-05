<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:58
         compiled from "D:\php\prestashop\themes\classic\templates\errors\not-found.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2868958ba39de333c89-92643063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84775127dd12461b59550a5982976d36c1c4c319' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\errors\\not-found.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2868958ba39de333c89-92643063',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39de3491b2_08307438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39de3491b2_08307438')) {function content_58ba39de3491b2_08307438($_smarty_tpl) {?>
<section id="content" class="page-content page-not-found">
  <h4><?php echo smartyTranslate(array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h4>
  <p><?php echo smartyTranslate(array('s'=>'Search again what you are looking for','d'=>'Shop.Theme'),$_smarty_tpl);?>
</p>

  
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displaySearch'),$_smarty_tpl);?>

  

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNotFound'),$_smarty_tpl);?>

</section>
<?php }} ?>
