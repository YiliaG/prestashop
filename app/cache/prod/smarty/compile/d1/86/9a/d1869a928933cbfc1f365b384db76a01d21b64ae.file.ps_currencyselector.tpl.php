<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:52
         compiled from "D:\php\prestashop\themes\classic\modules\ps_currencyselector\ps_currencyselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285858ba39d894ddb4-66810053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1869a928933cbfc1f365b384db76a01d21b64ae' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\modules\\ps_currencyselector\\ps_currencyselector.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285858ba39d894ddb4-66810053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_currency' => 0,
    'currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39d896d231_99633867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39d896d231_99633867')) {function content_58ba39d896d231_99633867($_smarty_tpl) {?>

<div id="_desktop_currency_selector">
  <div class="currency-selector dropdown js-dropdown">
    <span><?php echo smartyTranslate(array('s'=>'Currency:','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
    <span class="expand-more _gray-darker hidden-sm-down" data-toggle="dropdown"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</span>
    <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="hidden-sm-down">
      <i class="material-icons expand-more">&#xE5C5;</i>
    </a>
    <ul class="dropdown-menu hidden-sm-down" aria-labelledby="dLabel">
      <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
          <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
      <?php } ?>
    </ul>
    <select class="link hidden-md-up">
      <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</option>
      <?php } ?>
    </select>
  </div>
</div><?php }} ?>
