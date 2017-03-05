<?php

/* __string_template__b4aeaa65216df3594064c5364691dbf2a184602ab2b020793a6f8fc65c3fd06b */
class __TwigTemplate_ce8ea9837f52a1b3b4e1ef9ef63fe69d9bbaade0be61f531eea6e89d67720c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Products • yilia presta</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'zh';
    var full_language_code = 'zh-cn';
    var full_cldr_language_code = 'zh-Hans-CN';
    var country_iso_code = 'CN';
    var _PS_VERSION_ = '1.7.0.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = '新订单已放置于您的店铺。';
    var order_number_msg = 'Order number: ';
    var total_msg = '总计： ';
    var from_msg = '自： ';
    var see_order_msg = '查看此订单';
    var new_customer_msg = '新客户注册在您的店铺。';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = '阅读留言';
    var token = '6f9e1ae2af7308c1f7f2258b0204af07';
    var token_admin_orders = 'd21d2b736b154bb995127375adadefb3';
    var token_admin_customers = '84f4cdf08ee09938aefec53cd5e8c28c';
    var token_admin_customer_threads = 'fc90a8a60058351527a44f1c2e3c44b3';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '92b486bb24fc4e2145a2a2f5bc0c9639';
    var choose_language_translate = '选择语言：';
    var default_language = '1';
    var admin_modules_link = '/adminyilia/index.php/module/catalog/recommended?_token=cUkjXFt20kTnchrxC-p2k1lvpgZ5cd3B32K_J-EW2po';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = '更新成功';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = '查询商品';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminyilia/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminyilia/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminyilia\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"CNY\",\"sign\":\"\\u00a5\",\"name\":\"\\u4eba\\u6c11\\u5e01\",\"format\":\"\\u00a4\\u00a0#,##0.00\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/adminyilia/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.0.5\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.0.5\"></script>
<script type=\"text/javascript\" src=\"/adminyilia/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/adminyilia/themes/default/js/vendor/nv.d3.min.js\"></script>


  

";
        // line 71
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <a class=\"logo pull-left\" href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminDashboard&amp;token=c25d82ef53b25ed3aa3145e25198aca0\"></a>

    <div class=\"component pull-left\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">快速通道</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCategories&amp;addcategory&amp;token=ab5ffa8f7f156fd5f5d374c0ece76a57\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://127.0.0.1/adminyilia/index.php/productnew?token=b212463e9bed6f6042607cad98ff9580\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=675f2e41efef5ffaf4f0ab8b8f33d17d\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminOrders&amp;token=d21d2b736b154bb995127375adadefb3\"
                 data-item=\"Orders\"
      >Orders</a>
        <hr>
        <a
      class=\"dropdown-item js-quick-link\"
      data-rand=\"150\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/productform8?-p2k1lvpgZ5cd3B32K_J-EW2po\"
      data-post-link=\"http://127.0.0.1/adminyilia/index.php?controller=AdminQuickAccesses&token=c9210d2e5a198bf25e9030b21cd5b2b4\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Products - 列表\"
    >
      <i class=\"material-icons\">add_circle_outline</i>
      Add current page to QuickAccess
    </a>
    <a class=\"dropdown-item\" href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminQuickAccesses&token=c9210d2e5a198bf25e9030b21cd5b2b4\">
      <i class=\"material-icons\">settings</i>
      Manage quick accesses
    </a>
  </div>
</div>
</div>
    <div class=\"component\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/adminyilia/index.php?controller=AdminSearch&amp;token=d49c0a73b3c33a6e4591d9a2ca071c34\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          全部
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"全部\" href=\"#\" data-value=\"0\" data-placeholder=\"您在找什么？\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> 全部</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"分类\" href=\"#\" data-value=\"1\" data-placeholder=\"商品名称，库存，编码...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> 分类
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"客户 名\" href=\"#\" data-value=\"2\" data-placeholder=\"电子邮箱，名称...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> 客户 名
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"客户 IP地址\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>客户 by IP address</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"订单\" href=\"#\" data-value=\"3\" data-placeholder=\"订单号\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> 订单
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"发票\" href=\"#\" data-value=\"4\" data-placeholder=\"发票编号：\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> 发票
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"购物车\" href=\"#\" data-value=\"5\" data-placeholder=\"信用卡号码\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> 购物车
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"模块\" href=\"#\" data-value=\"7\" data-placeholder=\"模块名称\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> 模块
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">SEARCH<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/yilia.kuo%40apptisan.com.jpg\" /><br>
      Yilia Kuo
    </div>
    <hr>
    <a class=\"employee-link\" href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminEmployees&amp;token=92b486bb24fc4e2145a2a2f5bc0c9639&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Your profile
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminLogin&amp;token=7bf5a47cf4d40696916f6f71b6985ce0&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Log out
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-md-right\"><div class=\"notification-center dropdown\">
  <div class=\"notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCarts&token=e2317cc7853e9e8e4ba0bb24d00c9734&action=filterOnlyAbandonedCarts\">abandonned carts</a></strong>?<br>
              Did you check your conversion rate lately?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Have you considered selling on marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      从 <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - register <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://127.0.0.1/\" target= \"_blank\">yilia presta</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminDashboard&amp;token=c25d82ef53b25ed3aa3145e25198aca0\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminOrders&amp;token=d21d2b736b154bb995127375adadefb3\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i> <span>Orders</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminOrders&amp;token=d21d2b736b154bb995127375adadefb3\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminInvoices&amp;token=1f18b6ce1934b4d4b34bdf802a36b856\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminSlip&amp;token=29f14f4bd2b62a60fb9ac1eb2a5260f8\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminDeliverySlip&amp;token=22ac815744bb232c0799e9187f161e52\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCarts&amp;token=e2317cc7853e9e8e4ba0bb24d00c9734\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/adminyilia/index.php/product/catalog?_token=cUkjXFt20kTnchrxC-p2k1lvpgZ5cd3B32K_J-EW2po\" class=\"link\">
                    <i class=\"material-icons\">store</i> <span>Catalog</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/adminyilia/index.php/product/catalog?_token=cUkjXFt20kTnchrxC-p2k1lvpgZ5cd3B32K_J-EW2po\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCategories&amp;token=ab5ffa8f7f156fd5f5d374c0ece76a57\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminTracking&amp;token=eb077d379556b297e37cd46e70e1250d\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminAttributesGroups&amp;token=1e1e9f21a34d97b1bf77533e0b5ecbd2\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminManufacturers&amp;token=1ae1aae022deef81acf0c423dcca80b3\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminAttachments&amp;token=00919907b1e4436cee7d7e7a67963295\" class=\"link\"> Attachments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCartRules&amp;token=675f2e41efef5ffaf4f0ab8b8f33d17d\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCustomers&amp;token=84f4cdf08ee09938aefec53cd5e8c28c\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i> <span>Customers</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCustomers&amp;token=84f4cdf08ee09938aefec53cd5e8c28c\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminAddresses&amp;token=35a636b52df33cdbb698defc26502db8\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCustomerThreads&amp;token=fc90a8a60058351527a44f1c2e3c44b3\" class=\"link\">
                    <i class=\"material-icons\">chat</i> <span>Customer Service</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCustomerThreads&amp;token=fc90a8a60058351527a44f1c2e3c44b3\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminOrderMessage&amp;token=cd454d140937f7e0ca221293345a85be\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminReturn&amp;token=997e570958ae3124621a73d4e0986e24\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminStats&amp;token=9e6fe2dff8061fc1b9b015d7971f5c46\" class=\"link\">
                    <i class=\"material-icons\">assessment</i> <span>Stats</span>
                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"41\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"42\">
                  <a href=\"/adminyilia/index.php/module/catalog?_token=cUkjXFt20kTnchrxC-p2k1lvpgZ5cd3B32K_J-EW2po\" class=\"link\">
                    <i class=\"material-icons\">extension</i> <span>Modules</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/adminyilia/index.php/module/catalog?_token=cUkjXFt20kTnchrxC-p2k1lvpgZ5cd3B32K_J-EW2po\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminAddonsCatalog&amp;token=2a46144e90c4597c373f09baf57aa728\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminThemes&amp;token=3eab8d7687593eb26f53c863cad2fd65\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i> <span>Design</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminThemes&amp;token=3eab8d7687593eb26f53c863cad2fd65\" class=\"link\"> Themes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminThemesCatalog&amp;token=6b1e2b02c9197ce36bdc0b9b4e3383cb\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCmsContent&amp;token=43d0d7609e01ea153b020c0fd1c057db\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminModulesPositions&amp;token=c86d2945b3b9ad6ccc44f31381c79587\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminImages&amp;token=4eb38da2b55b9556ccb1e5adf4133493\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminLinkWidget&amp;token=75377e392ec4682f29c8a9f1321dd779\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCarriers&amp;token=c898e09531129ecd12de71499011a3ec\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i> <span>Shipping</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCarriers&amp;token=c898e09531129ecd12de71499011a3ec\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminShipping&amp;token=3dc2350370be28f7557fb3e9ed498abe\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminPayment&amp;token=567237ce689252ad004344f622bb0a60\" class=\"link\">
                    <i class=\"material-icons\">payment</i> <span>Payment</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminPayment&amp;token=567237ce689252ad004344f622bb0a60\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminPaymentPreferences&amp;token=01882f4c5cb23e9432a9eeffd969e59d\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminLocalization&amp;token=eab8f7555eaf2b5c59b357687cc25fe4\" class=\"link\">
                    <i class=\"material-icons\">language</i> <span>International</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminLocalization&amp;token=eab8f7555eaf2b5c59b357687cc25fe4\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCountries&amp;token=f138d07489a056cedfc95974ec7ff461\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminTaxes&amp;token=e86109761723370bde33954f8912db4c\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminTranslations&amp;token=b37ab455463223b48da4894dba69c081\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"72\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminPreferences&amp;token=690de07290c665f7cd43aa7a7c29dded\" class=\"link\">
                    <i class=\"material-icons\">settings</i> <span>Shop Parameters</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminPreferences&amp;token=690de07290c665f7cd43aa7a7c29dded\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminOrderPreferences&amp;token=6181efd52aa60801bb89645e332a692f\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminPPreferences&amp;token=b736014a39f67cba9414180e1757a975\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminCustomerPreferences&amp;token=baef402cc052297fb044dc1c350f0dca\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminContacts&amp;token=716aa0ceab6f41579101f20071521d86\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminMeta&amp;token=45dfc732c83d2c5576d2074bb04e3ad8\" class=\"link\"> Traffic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminSearchConf&amp;token=30382af3771ffea40a9dc502011c35f3\" class=\"link\"> Search
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminInformation&amp;token=cc38691a5b543795404271990c293a00\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i> <span>Advanced Parameters</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminInformation&amp;token=cc38691a5b543795404271990c293a00\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminPerformance&amp;token=df84a44f87f0f332cf2907de799bb873\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminAdminPreferences&amp;token=4fdefcca05f217588617acc5dd6413ff\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminEmails&amp;token=0972047e762f7b0857ff869a8ebe38ef\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminImport&amp;token=58110cb960d1b8375f63c27f5780c647\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminEmployees&amp;token=92b486bb24fc4e2145a2a2f5bc0c9639\" class=\"link\"> Employees
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminRequestSql&amp;token=3c8a83ce3249ded181eab5f0f0e407f7\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminLogs&amp;token=753e91b05c760597d1d8836ba2769995\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://127.0.0.1/adminyilia/index.php?controller=AdminWebservice&amp;token=aa0b252632316eae81ab9eef6e66e74d\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>


</nav>


<div id=\"main-div\">

  
        
    <div class=\"content-div -notoolbar\">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">继续</button>
  <a class=\"onboarding-button-shut-down\">Skip this tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){

    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Welcome to your shop!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hi! My name is Preston and I'm here to show you around.<\\/p>\\n    <p>You will discover a few essential steps before you can launch your shop:\\n    Create your first product, customize your shop, configure shipping and payments...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Let's get started!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Later<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Let's create your first product\",\"subtitle\":{\"1\":\"What do you want to tell about it? Think about what your customers want to know.\",\"2\":\"Add clear and attractive information. Don't worry, you can edit it later :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Give your product a catchy name.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fill out the essential details in this tab. The other tabs are for more advanced information.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Add one or more pictures so your product looks tempting!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"How much do you want to sell it?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! You just created your first product. Looks good, right?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:last-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Give your shop its own identity\",\"subtitle\":{\"1\":\"How do you want your shop to look? What makes it so special?\",\"2\":\"Customize your theme or choose the best design from our theme catalog.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"A good way to start is to add your own logo here!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"If you want something really special, have a look at the theme catalog!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Get your shop ready for payments\",\"subtitle\":{\"1\":\"How do you want your customers to pay you?\",\"2\":\"Adapt your offer to your market: add the most popular payment methods for your customers!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"The payments methods are already available to your customers.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"And you can choose to add other payment methods from here!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Choose your shipping solutions\",\"subtitle\":{\"1\":\"How do you want to deliver your products?\",\"2\":\"Select the shipping solutions the most likely to suit your customers! Create your own carrier or add a ready-made module.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Here are the shipping methods available on your shop today.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"You can offer more delivery options by setting up additional carriers\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Improve your shop with modules\",\"subtitle\":{\"1\":\"Add new features and manage existing ones thanks to modules.\",\"2\":\"A module can be already installed for you, free to install or paying - browse our selection to see what's available!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Discover our module selection in the first tab. Manage your modules on the second one and be aware of notifications in the third tab.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">Over to you!<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    You've seen the essential, but there's a lot more to explore.<br \\/>\\n    Some ressources can help you go further:\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS16\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <div class=\\\"starter-guide\\\"><\\/div>\\n          <span class=\\\"link\\\">Starter Guide<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <div class=\\\"forum\\\"><\\/div>\\n          <span class=\\\"link\\\">\\u8bba\\u575b<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"training\\\"><\\/div>\\n          <span class=\\\"link\\\">Training<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\n          <span class=\\\"link\\\">Video tutorial<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">I'm ready<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 0, baseDir+\"modules/welcome/welcome-api.php\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Are you lost?</p>    <p>To continue, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">继续</button>    </div>    <p>If you want to stop the tutorial for good, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quit the Welcome tutorial</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Step <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">下一个</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1012
        $this->displayBlock('content_header', $context, $blocks);
        // line 1013
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1014
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1015
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1016
        echo "
        </div>
      </div>

    </div>

  
</div>


  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\" \"></i> 19.879s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ZH&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        联系我们
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ZH&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        bug跟踪
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ZH&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        论坛
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ZH&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        插件
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ZH&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Training
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ZH&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/zh/login?email=yilia.kuo%40apptisan.com&amp;firstname=Yilia&amp;lastname=Kuo&amp;website=http%3A%2F%2F127.0.0.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ZH&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/adminyilia/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop with PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/zh/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/zh/login?email=yilia.kuo%40apptisan.com&amp;firstname=Yilia&amp;lastname=Kuo&amp;website=http%3A%2F%2F127.0.0.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ZH&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> 登录
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>
  </div>

";
        // line 1161
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 71
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1012
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1013
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1014
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1015
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1161
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__b4aeaa65216df3594064c5364691dbf2a184602ab2b020793a6f8fc65c3fd06b";
    }

    public function getDebugInfo()
    {
        return array (  1240 => 1161,  1235 => 1015,  1230 => 1014,  1225 => 1013,  1220 => 1012,  1211 => 71,  1203 => 1161,  1056 => 1016,  1053 => 1015,  1050 => 1014,  1047 => 1013,  1045 => 1012,  100 => 71,  28 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
