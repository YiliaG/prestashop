<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:57
         compiled from "D:\php\prestashop\themes\classic\templates\customer\_partials\block-address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1129958ba39dd1b41f6-37648957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1319e932bd9cea46b76bcc5329c9ed28d0c17dd' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\customer\\_partials\\block-address.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1129958ba39dd1b41f6-37648957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'address' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39dd1d4d59_62307343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39dd1d4d59_62307343')) {function content_58ba39dd1d4d59_62307343($_smarty_tpl) {?>
<article id="address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="address" data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
  <div class="address-body">
    <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</h4>
    <address><?php echo $_smarty_tpl->tpl_vars['address']->value['formatted'];?>
</address>
  </div>
  <div class="address-footer">
    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id']),$_smarty_tpl);?>
" data-link-action="edit-address">
      <i class="material-icons">&#xE254;</i>
      <span><?php echo smartyTranslate(array('s'=>'Update','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
    </a>
    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id'],'params'=>array('delete'=>1,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl);?>
" data-link-action="delete-address">
      <i class="material-icons">&#xE872;</i>
      <span><?php echo smartyTranslate(array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
    </a>
  </div>
</article>
<?php }} ?>
