<?php /*%%SmartyHeaderCode:658658ba3a062775b1-41463323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1487062196,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '658658ba3a062775b1-41463323',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ba8736690881_38043159',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba8736690881_38043159')) {function content_58ba8736690881_38043159($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://127.0.0.1/zh/my-account" rel="nofollow">
      Your account
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://127.0.0.1/zh/identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/zh/order-slip" title="代金券" rel="nofollow">
            代金券
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/zh/addresses" title="地址" rel="nofollow">
            地址
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/zh/order-history" title="订单" rel="nofollow">
            订单
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
