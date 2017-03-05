<?php /* Smarty version Smarty-3.1.19, created on 2017-03-04 11:51:56
         compiled from "D:\php\prestashop\themes\classic\templates\checkout\_partials\steps\checkout-step.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2047358ba39dcbbd260-51719906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2378323db739dade3afb62a3c06607d8a51459ff' => 
    array (
      0 => 'D:\\php\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\steps\\checkout-step.tpl',
      1 => 1487062196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047358ba39dcbbd260-51719906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'step_is_current' => 0,
    'step_is_reachable' => 0,
    'step_is_complete' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba39dcbdfe93_31083465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba39dcbdfe93_31083465')) {function content_58ba39dcbdfe93_31083465($_smarty_tpl) {?>
<section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
          class = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value)), ENT_QUOTES, 'UTF-8');?>
"
>
  <h1 class="step-title h3">
    <i class="material-icons done">&#xE876;</i>
    <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> edit</span>
  </h1>

  <div class="content">
    DUMMY STEP CONTENT
  </div>
</section>
<?php }} ?>
