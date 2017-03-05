<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:55:47
         compiled from "D:\php\prestashop\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798058ba3ac39b95a8-77042835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11c31feab3fc8b2c98bc5492ff448c3a0d78b335' => 
    array (
      0 => 'D:\\php\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1487062358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798058ba3ac39b95a8-77042835',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba3ac39d8904_86214244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba3ac39d8904_86214244')) {function content_58ba3ac39d8904_86214244($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
