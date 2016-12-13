<?php

/* __string_template__ef9c536d8de503a00d14fcf6065b2814d348e2af484e4872bd0e4c85dfbe9528 */
class __TwigTemplate_22769ddea97c8bb366024f4ead078f6b9dd6315020bf70ba60686284f1e92d92 extends Twig_Template
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
        $__internal_12fecbdb530179d54c65561e8eb2e472c791801c88d76e57a75dce26f3e4003a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fecbdb530179d54c65561e8eb2e472c791801c88d76e57a75dce26f3e4003a->enter($__internal_12fecbdb530179d54c65561e8eb2e472c791801c88d76e57a75dce26f3e4003a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__ef9c536d8de503a00d14fcf6065b2814d348e2af484e4872bd0e4c85dfbe9528"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Products • rupsar</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'en';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'CA';
    var _PS_VERSION_ = '1.7.0.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '58aae01f33cef5a727d98adaae332405';
    var token_admin_orders = '9d4a3668be4863209990c5e113026990';
    var token_admin_customers = '5e8a4ac2b4bf71667b5ef7a1c9432661';
    var token_admin_customer_threads = 'f8600db45a6deb92ae068e1e3ca8c891';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '822dead6a3a9804086710262143ec04e';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/admin8583v5mre/index.php/module/catalog/recommended?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg';
    var tab_modules_list = 'erpillicopresta,mobfirst,prestagiftvouchers,dmuassocprodcat';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/admin8583v5mre/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin8583v5mre/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin8583v5mre\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"CAD\",\"sign\":\"\$\",\"name\":\"Canadian Dollar\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/admin8583v5mre/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.0.0\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.0.0\"></script>
<script type=\"text/javascript\" src=\"/admin8583v5mre/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin8583v5mre/themes/default/js/vendor/nv.d3.min.js\"></script>


  

";
        // line 69
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <a class=\"logo pull-left\" href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminDashboard&amp;token=1aa7df837185ec28fa4bbfed433391c1\"></a>

    <div class=\"component pull-left\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Quick Access</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCategories&amp;addcategory&amp;token=2c7a74df3ba0710ebf5b2156630b346c\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://rupsar.local/admin8583v5mre/index.php/productnew?token=9e3a2fdf3112fa598e3591d868170381\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a4ed8ec52bab915d50b6d22296dfffe7\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrders&amp;token=9d4a3668be4863209990c5e113026990\"
                 data-item=\"Orders\"
      >Orders</a>
        <hr>
        <a
      class=\"dropdown-item js-quick-link\"
      data-rand=\"34\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/productcatalog?-yBcOT2UILn85FXW-BSb7ygQxxg\"
      data-post-link=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminQuickAccesses&token=190f5a54bed25905370edcc36e4a89e1\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Products - List\"
    >
      <i class=\"material-icons\">add_circle_outline</i>
      Add current page to QuickAccess
    </a>
    <a class=\"dropdown-item\" href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminQuickAccesses&token=190f5a54bed25905370edcc36e4a89e1\">
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
      action=\"/admin8583v5mre/index.php?controller=AdminSearch&amp;token=da46376dd0258822ffd76629f122439e\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Everywhere
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Everywhere</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalog
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Customers by name
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Customers by IP address</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Orders
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice Number\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Invoices
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Carts
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
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
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/rupak.karmadhar%40gmail.com.jpg\" /><br>
      Md Tajmilur Rahman
    </div>
    <hr>
    <a class=\"employee-link\" href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminEmployees&amp;token=822dead6a3a9804086710262143ec04e&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Your profile
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLogin&amp;token=0229e97a16e5d3acd2935478e722f286&amp;logout\">
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
              Have you checked your <strong><a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCarts&token=854c39c55f2db103a301bcfca35e40ea&action=filterOnlyAbandonedCarts\">abandonned carts</a></strong>?<br>
              Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
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
    <a class=\"link\" href=\"http://rupsar.local/\" target= \"_blank\">rupsar</a>
  </div>
</div>
              <div class=\"component pull-right\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Your shop is in debug mode.</strong></p><p class='text-left'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\">Debug mode</span>
        </div>
      </div>
        

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminDashboard&amp;token=1aa7df837185ec28fa4bbfed433391c1\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrders&amp;token=9d4a3668be4863209990c5e113026990\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i> <span>Orders</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrders&amp;token=9d4a3668be4863209990c5e113026990\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminInvoices&amp;token=177332702042612d0f00a156e13ce603\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminSlip&amp;token=10ab10cc1ee935d11acf23a96f9c2541\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminDeliverySlip&amp;token=331ee0e70da6b65d5320dd4c230e16ae\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCarts&amp;token=854c39c55f2db103a301bcfca35e40ea\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/admin8583v5mre/index.php/product/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\" class=\"link\">
                    <i class=\"material-icons\">store</i> <span>Catalog</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/admin8583v5mre/index.php/product/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCategories&amp;token=2c7a74df3ba0710ebf5b2156630b346c\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminTracking&amp;token=0952cd82e0ef7594fff07c6280d9bc13\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAttributesGroups&amp;token=596dbb91e3ee3fba695adbbff643338b\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminManufacturers&amp;token=02b3a7a2703f4daab4e21b09fe7bf8ab\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAttachments&amp;token=5778d0aecd6921b491c105b7ac707b59\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCartRules&amp;token=a4ed8ec52bab915d50b6d22296dfffe7\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomers&amp;token=5e8a4ac2b4bf71667b5ef7a1c9432661\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i> <span>Customers</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomers&amp;token=5e8a4ac2b4bf71667b5ef7a1c9432661\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAddresses&amp;token=49d776f24f821b698064a0cad02d468e\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomerThreads&amp;token=f8600db45a6deb92ae068e1e3ca8c891\" class=\"link\">
                    <i class=\"material-icons\">chat</i> <span>Customer Service</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomerThreads&amp;token=f8600db45a6deb92ae068e1e3ca8c891\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrderMessage&amp;token=ec588a4b688dac95bedc8954abbeab16\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminReturn&amp;token=8746b30147a7c3f352231816c395d116\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminStats&amp;token=cb8b28a1542168281a63ad4305139e5c\" class=\"link\">
                    <i class=\"material-icons\">assessment</i> <span>Stats</span>
                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"41\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"42\">
                  <a href=\"/admin8583v5mre/index.php/module/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\" class=\"link\">
                    <i class=\"material-icons\">extension</i> <span>Modules</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/admin8583v5mre/index.php/module/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAddonsCatalog&amp;token=28549f4b6f604eaebfb9f510875e5e5e\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminThemes&amp;token=bec21137f39d4bdbac9ea53c23292e9e\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i> <span>Design</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminThemes&amp;token=bec21137f39d4bdbac9ea53c23292e9e\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminThemesCatalog&amp;token=9fe18794aef53569af6dae65ff832bec\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCmsContent&amp;token=91b63446a74715a4c3bfcb6d52954778\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminModulesPositions&amp;token=d4818e841a116130853dde110cc1874c\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminImages&amp;token=ca821b55f919b99af23b5bd277f44e01\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLinkWidget&amp;token=f863ba0d0cf389174e05fa915c0294be\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCarriers&amp;token=f201ef1f02c38c2e99cc13514b934c93\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i> <span>Shipping</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCarriers&amp;token=f201ef1f02c38c2e99cc13514b934c93\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminShipping&amp;token=e7ec03d8254f8da77ff82312915ea2e5\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPayment&amp;token=84476f025e5a59b122107d1820316734\" class=\"link\">
                    <i class=\"material-icons\">payment</i> <span>Payment</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPayment&amp;token=84476f025e5a59b122107d1820316734\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPaymentPreferences&amp;token=a00ce1f5f0500e5ebd61956a78ae23ad\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLocalization&amp;token=86c6a064a6ad3d04de3f7e4518690751\" class=\"link\">
                    <i class=\"material-icons\">language</i> <span>International</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLocalization&amp;token=86c6a064a6ad3d04de3f7e4518690751\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCountries&amp;token=3fa2315573f0e46c389e3bf13f679371\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminTaxes&amp;token=63a8e5783a8cd5e51011d8f316ee41c9\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminTranslations&amp;token=f51db9525c969e40a8f254b33196e253\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"72\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPreferences&amp;token=222d2119582629a52afab17082697636\" class=\"link\">
                    <i class=\"material-icons\">settings</i> <span>Shop Parameters</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPreferences&amp;token=222d2119582629a52afab17082697636\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrderPreferences&amp;token=5c53ba199440924d04522698debf097d\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPPreferences&amp;token=21f6c5a41e8d3417760453930a158440\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomerPreferences&amp;token=52a9701e9763dd8f78b29e5c1a14f1df\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminContacts&amp;token=d08f22ca24300ddc0f5b18388d891b28\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminMeta&amp;token=2ad71a861ddaf236bd39467732613704\" class=\"link\"> Traffic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminSearchConf&amp;token=cc4e3e371b71e5d322f190e40a355740\" class=\"link\"> Search
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminInformation&amp;token=73db9c4aeeb394f63f77892e768f9845\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i> <span>Advanced Parameters</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminInformation&amp;token=73db9c4aeeb394f63f77892e768f9845\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPerformance&amp;token=3b0b6ecfc03af2bcd3f3198978fa4260\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAdminPreferences&amp;token=0dd5e9b47833731bef73400d1a518bef\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminEmails&amp;token=34a950bb508896a9e505527350ecf8de\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminImport&amp;token=d48ec0342d19275be8fb97f67a48eaa2\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminEmployees&amp;token=822dead6a3a9804086710262143ec04e\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminRequestSql&amp;token=4596639be6cf8c2389cb09080dd35e74\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLogs&amp;token=345e18d95c187d830bc4d8dd6e75933e\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminWebservice&amp;token=c7da01ca8128ad0164e5481fa8c430e4\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminShopGroup&amp;token=8da650fd09daaae3a1ade546109ae4ac\" class=\"link\"> Multistore
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCatalog&amp;token=ed1fe6c537a56094e67bdf5ae6f43543\">Catalog</a>
                  </li>
      
              <li>
                      <a href=\"/admin8583v5mre/index.php/product/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\">Products</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Products    </h2>
  

  
    <div class=\"toolbar-icons\">
                                      
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/admin8583v5mre/index.php/product/new?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\"            title=\"Create a new product: CTRL+P\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">New product</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/admin8583v5mre/index.php/module/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\"          title=\"Recommended Modules and Services\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Recommended Modules and Services</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Help\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin8583v5mre/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminProducts%253Fversion%253D1.7.0.0%2526country%253Den/Help?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Help</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=rupak.karmadhar%40gmail.com&amp;firstname=Md+Tajmilur&amp;lastname=Rahman&amp;website=http%3A%2F%2Frupsar.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin8583v5mre/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=rupak.karmadhar%40gmail.com&amp;firstname=Md+Tajmilur&amp;lastname=Rahman&amp;website=http%3A%2F%2Frupsar.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
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
    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1056
        $this->displayBlock('content_header', $context, $blocks);
        // line 1057
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1058
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1059
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1060
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
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\" \"></i> 13.782s</span>
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
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=rupak.karmadhar%40gmail.com&amp;firstname=Md+Tajmilur&amp;lastname=Rahman&amp;website=http%3A%2F%2Frupsar.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin8583v5mre/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=rupak.karmadhar%40gmail.com&amp;firstname=Md+Tajmilur&amp;lastname=Rahman&amp;website=http%3A%2F%2Frupsar.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
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
        // line 1205
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_12fecbdb530179d54c65561e8eb2e472c791801c88d76e57a75dce26f3e4003a->leave($__internal_12fecbdb530179d54c65561e8eb2e472c791801c88d76e57a75dce26f3e4003a_prof);

    }

    // line 69
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e8ab449cfd78b96565f88a99cd1f5e1c49c5b5037a295e87d6d202bbedbfde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8ab449cfd78b96565f88a99cd1f5e1c49c5b5037a295e87d6d202bbedbfde5->enter($__internal_0e8ab449cfd78b96565f88a99cd1f5e1c49c5b5037a295e87d6d202bbedbfde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e8ab449cfd78b96565f88a99cd1f5e1c49c5b5037a295e87d6d202bbedbfde5->leave($__internal_0e8ab449cfd78b96565f88a99cd1f5e1c49c5b5037a295e87d6d202bbedbfde5_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_8fce5227a12a48e08848b13165a4e0b10d357000c646eb0d1ed02371b2034dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fce5227a12a48e08848b13165a4e0b10d357000c646eb0d1ed02371b2034dbd->enter($__internal_8fce5227a12a48e08848b13165a4e0b10d357000c646eb0d1ed02371b2034dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_8fce5227a12a48e08848b13165a4e0b10d357000c646eb0d1ed02371b2034dbd->leave($__internal_8fce5227a12a48e08848b13165a4e0b10d357000c646eb0d1ed02371b2034dbd_prof);

    }

    // line 1056
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_17913c1b4a46d624515a21030c1490faf2678b9221fa8653ad0897f8cd24c5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17913c1b4a46d624515a21030c1490faf2678b9221fa8653ad0897f8cd24c5ad->enter($__internal_17913c1b4a46d624515a21030c1490faf2678b9221fa8653ad0897f8cd24c5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_17913c1b4a46d624515a21030c1490faf2678b9221fa8653ad0897f8cd24c5ad->leave($__internal_17913c1b4a46d624515a21030c1490faf2678b9221fa8653ad0897f8cd24c5ad_prof);

    }

    // line 1057
    public function block_content($context, array $blocks = array())
    {
        $__internal_a423ab6bfdd03e5be806b541fa476cb09a285825b266610774bf1c44b2cc07e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a423ab6bfdd03e5be806b541fa476cb09a285825b266610774bf1c44b2cc07e5->enter($__internal_a423ab6bfdd03e5be806b541fa476cb09a285825b266610774bf1c44b2cc07e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a423ab6bfdd03e5be806b541fa476cb09a285825b266610774bf1c44b2cc07e5->leave($__internal_a423ab6bfdd03e5be806b541fa476cb09a285825b266610774bf1c44b2cc07e5_prof);

    }

    // line 1058
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_27e21d6db2f34fe558c23c0253222879f920530794bb47362b8176119d233cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e21d6db2f34fe558c23c0253222879f920530794bb47362b8176119d233cb0->enter($__internal_27e21d6db2f34fe558c23c0253222879f920530794bb47362b8176119d233cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_27e21d6db2f34fe558c23c0253222879f920530794bb47362b8176119d233cb0->leave($__internal_27e21d6db2f34fe558c23c0253222879f920530794bb47362b8176119d233cb0_prof);

    }

    // line 1059
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_63f4b08121b6a0829ffb48bf11cdf86518a3af32addc705d890d3d45919d5d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f4b08121b6a0829ffb48bf11cdf86518a3af32addc705d890d3d45919d5d12->enter($__internal_63f4b08121b6a0829ffb48bf11cdf86518a3af32addc705d890d3d45919d5d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_63f4b08121b6a0829ffb48bf11cdf86518a3af32addc705d890d3d45919d5d12->leave($__internal_63f4b08121b6a0829ffb48bf11cdf86518a3af32addc705d890d3d45919d5d12_prof);

    }

    // line 1205
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0b13cf63166a7b5e3fc03d0944b83e1b8cb3e8b1d3b366504648f29f607dfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b13cf63166a7b5e3fc03d0944b83e1b8cb3e8b1d3b366504648f29f607dfc4->enter($__internal_f0b13cf63166a7b5e3fc03d0944b83e1b8cb3e8b1d3b366504648f29f607dfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0b13cf63166a7b5e3fc03d0944b83e1b8cb3e8b1d3b366504648f29f607dfc4->leave($__internal_f0b13cf63166a7b5e3fc03d0944b83e1b8cb3e8b1d3b366504648f29f607dfc4_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_3ce1f4167977da409f54b456daf5e6ff9b4cccc1666e7b29b94891f80e565714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce1f4167977da409f54b456daf5e6ff9b4cccc1666e7b29b94891f80e565714->enter($__internal_3ce1f4167977da409f54b456daf5e6ff9b4cccc1666e7b29b94891f80e565714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_3ce1f4167977da409f54b456daf5e6ff9b4cccc1666e7b29b94891f80e565714->leave($__internal_3ce1f4167977da409f54b456daf5e6ff9b4cccc1666e7b29b94891f80e565714_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_d904e04bdcff3e727be4eb5c9d3dd64be3a2b954f1f092b710aa6772c81fbb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d904e04bdcff3e727be4eb5c9d3dd64be3a2b954f1f092b710aa6772c81fbb0d->enter($__internal_d904e04bdcff3e727be4eb5c9d3dd64be3a2b954f1f092b710aa6772c81fbb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_d904e04bdcff3e727be4eb5c9d3dd64be3a2b954f1f092b710aa6772c81fbb0d->leave($__internal_d904e04bdcff3e727be4eb5c9d3dd64be3a2b954f1f092b710aa6772c81fbb0d_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__ef9c536d8de503a00d14fcf6065b2814d348e2af484e4872bd0e4c85dfbe9528";
    }

    public function getDebugInfo()
    {
        return array (  1326 => 1205,  1315 => 1059,  1304 => 1058,  1293 => 1057,  1282 => 1056,  1261 => 69,  1250 => 1205,  1103 => 1060,  1100 => 1059,  1097 => 1058,  1094 => 1057,  1092 => 1056,  101 => 69,  31 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Products • rupsar</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'en';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'CA';
    var _PS_VERSION_ = '1.7.0.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '58aae01f33cef5a727d98adaae332405';
    var token_admin_orders = '9d4a3668be4863209990c5e113026990';
    var token_admin_customers = '5e8a4ac2b4bf71667b5ef7a1c9432661';
    var token_admin_customer_threads = 'f8600db45a6deb92ae068e1e3ca8c891';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '822dead6a3a9804086710262143ec04e';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/admin8583v5mre/index.php/module/catalog/recommended?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg';
    var tab_modules_list = 'erpillicopresta,mobfirst,prestagiftvouchers,dmuassocprodcat';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/admin8583v5mre/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin8583v5mre/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin8583v5mre\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"CAD\",\"sign\":\"\$\",\"name\":\"Canadian Dollar\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/admin8583v5mre/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.0.0\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.0.0\"></script>
<script type=\"text/javascript\" src=\"/admin8583v5mre/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin8583v5mre/themes/default/js/vendor/nv.d3.min.js\"></script>


  

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <a class=\"logo pull-left\" href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminDashboard&amp;token=1aa7df837185ec28fa4bbfed433391c1\"></a>

    <div class=\"component pull-left\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Quick Access</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCategories&amp;addcategory&amp;token=2c7a74df3ba0710ebf5b2156630b346c\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://rupsar.local/admin8583v5mre/index.php/productnew?token=9e3a2fdf3112fa598e3591d868170381\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a4ed8ec52bab915d50b6d22296dfffe7\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrders&amp;token=9d4a3668be4863209990c5e113026990\"
                 data-item=\"Orders\"
      >Orders</a>
        <hr>
        <a
      class=\"dropdown-item js-quick-link\"
      data-rand=\"34\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/productcatalog?-yBcOT2UILn85FXW-BSb7ygQxxg\"
      data-post-link=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminQuickAccesses&token=190f5a54bed25905370edcc36e4a89e1\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Products - List\"
    >
      <i class=\"material-icons\">add_circle_outline</i>
      Add current page to QuickAccess
    </a>
    <a class=\"dropdown-item\" href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminQuickAccesses&token=190f5a54bed25905370edcc36e4a89e1\">
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
      action=\"/admin8583v5mre/index.php?controller=AdminSearch&amp;token=da46376dd0258822ffd76629f122439e\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Everywhere
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Everywhere</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalog
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Customers by name
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Customers by IP address</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Orders
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice Number\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Invoices
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Carts
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
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
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/rupak.karmadhar%40gmail.com.jpg\" /><br>
      Md Tajmilur Rahman
    </div>
    <hr>
    <a class=\"employee-link\" href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminEmployees&amp;token=822dead6a3a9804086710262143ec04e&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Your profile
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLogin&amp;token=0229e97a16e5d3acd2935478e722f286&amp;logout\">
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
              Have you checked your <strong><a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCarts&token=854c39c55f2db103a301bcfca35e40ea&action=filterOnlyAbandonedCarts\">abandonned carts</a></strong>?<br>
              Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
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
    <a class=\"link\" href=\"http://rupsar.local/\" target= \"_blank\">rupsar</a>
  </div>
</div>
              <div class=\"component pull-right\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Your shop is in debug mode.</strong></p><p class='text-left'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\">Debug mode</span>
        </div>
      </div>
        

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminDashboard&amp;token=1aa7df837185ec28fa4bbfed433391c1\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrders&amp;token=9d4a3668be4863209990c5e113026990\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i> <span>Orders</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrders&amp;token=9d4a3668be4863209990c5e113026990\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminInvoices&amp;token=177332702042612d0f00a156e13ce603\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminSlip&amp;token=10ab10cc1ee935d11acf23a96f9c2541\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminDeliverySlip&amp;token=331ee0e70da6b65d5320dd4c230e16ae\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCarts&amp;token=854c39c55f2db103a301bcfca35e40ea\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/admin8583v5mre/index.php/product/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\" class=\"link\">
                    <i class=\"material-icons\">store</i> <span>Catalog</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/admin8583v5mre/index.php/product/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCategories&amp;token=2c7a74df3ba0710ebf5b2156630b346c\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminTracking&amp;token=0952cd82e0ef7594fff07c6280d9bc13\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAttributesGroups&amp;token=596dbb91e3ee3fba695adbbff643338b\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminManufacturers&amp;token=02b3a7a2703f4daab4e21b09fe7bf8ab\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAttachments&amp;token=5778d0aecd6921b491c105b7ac707b59\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCartRules&amp;token=a4ed8ec52bab915d50b6d22296dfffe7\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomers&amp;token=5e8a4ac2b4bf71667b5ef7a1c9432661\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i> <span>Customers</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomers&amp;token=5e8a4ac2b4bf71667b5ef7a1c9432661\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAddresses&amp;token=49d776f24f821b698064a0cad02d468e\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomerThreads&amp;token=f8600db45a6deb92ae068e1e3ca8c891\" class=\"link\">
                    <i class=\"material-icons\">chat</i> <span>Customer Service</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomerThreads&amp;token=f8600db45a6deb92ae068e1e3ca8c891\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrderMessage&amp;token=ec588a4b688dac95bedc8954abbeab16\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminReturn&amp;token=8746b30147a7c3f352231816c395d116\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminStats&amp;token=cb8b28a1542168281a63ad4305139e5c\" class=\"link\">
                    <i class=\"material-icons\">assessment</i> <span>Stats</span>
                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"41\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"42\">
                  <a href=\"/admin8583v5mre/index.php/module/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\" class=\"link\">
                    <i class=\"material-icons\">extension</i> <span>Modules</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/admin8583v5mre/index.php/module/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAddonsCatalog&amp;token=28549f4b6f604eaebfb9f510875e5e5e\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminThemes&amp;token=bec21137f39d4bdbac9ea53c23292e9e\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i> <span>Design</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminThemes&amp;token=bec21137f39d4bdbac9ea53c23292e9e\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminThemesCatalog&amp;token=9fe18794aef53569af6dae65ff832bec\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCmsContent&amp;token=91b63446a74715a4c3bfcb6d52954778\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminModulesPositions&amp;token=d4818e841a116130853dde110cc1874c\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminImages&amp;token=ca821b55f919b99af23b5bd277f44e01\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLinkWidget&amp;token=f863ba0d0cf389174e05fa915c0294be\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCarriers&amp;token=f201ef1f02c38c2e99cc13514b934c93\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i> <span>Shipping</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCarriers&amp;token=f201ef1f02c38c2e99cc13514b934c93\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminShipping&amp;token=e7ec03d8254f8da77ff82312915ea2e5\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPayment&amp;token=84476f025e5a59b122107d1820316734\" class=\"link\">
                    <i class=\"material-icons\">payment</i> <span>Payment</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPayment&amp;token=84476f025e5a59b122107d1820316734\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPaymentPreferences&amp;token=a00ce1f5f0500e5ebd61956a78ae23ad\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLocalization&amp;token=86c6a064a6ad3d04de3f7e4518690751\" class=\"link\">
                    <i class=\"material-icons\">language</i> <span>International</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLocalization&amp;token=86c6a064a6ad3d04de3f7e4518690751\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCountries&amp;token=3fa2315573f0e46c389e3bf13f679371\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminTaxes&amp;token=63a8e5783a8cd5e51011d8f316ee41c9\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminTranslations&amp;token=f51db9525c969e40a8f254b33196e253\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"72\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPreferences&amp;token=222d2119582629a52afab17082697636\" class=\"link\">
                    <i class=\"material-icons\">settings</i> <span>Shop Parameters</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPreferences&amp;token=222d2119582629a52afab17082697636\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminOrderPreferences&amp;token=5c53ba199440924d04522698debf097d\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPPreferences&amp;token=21f6c5a41e8d3417760453930a158440\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCustomerPreferences&amp;token=52a9701e9763dd8f78b29e5c1a14f1df\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminContacts&amp;token=d08f22ca24300ddc0f5b18388d891b28\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminMeta&amp;token=2ad71a861ddaf236bd39467732613704\" class=\"link\"> Traffic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminSearchConf&amp;token=cc4e3e371b71e5d322f190e40a355740\" class=\"link\"> Search
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminInformation&amp;token=73db9c4aeeb394f63f77892e768f9845\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i> <span>Advanced Parameters</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminInformation&amp;token=73db9c4aeeb394f63f77892e768f9845\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminPerformance&amp;token=3b0b6ecfc03af2bcd3f3198978fa4260\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminAdminPreferences&amp;token=0dd5e9b47833731bef73400d1a518bef\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminEmails&amp;token=34a950bb508896a9e505527350ecf8de\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminImport&amp;token=d48ec0342d19275be8fb97f67a48eaa2\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminEmployees&amp;token=822dead6a3a9804086710262143ec04e\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminRequestSql&amp;token=4596639be6cf8c2389cb09080dd35e74\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminLogs&amp;token=345e18d95c187d830bc4d8dd6e75933e\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminWebservice&amp;token=c7da01ca8128ad0164e5481fa8c430e4\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminShopGroup&amp;token=8da650fd09daaae3a1ade546109ae4ac\" class=\"link\"> Multistore
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://rupsar.local/admin8583v5mre/index.php?controller=AdminCatalog&amp;token=ed1fe6c537a56094e67bdf5ae6f43543\">Catalog</a>
                  </li>
      
              <li>
                      <a href=\"/admin8583v5mre/index.php/product/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\">Products</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Products    </h2>
  

  
    <div class=\"toolbar-icons\">
                                      
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/admin8583v5mre/index.php/product/new?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\"            title=\"Create a new product: CTRL+P\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">New product</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/admin8583v5mre/index.php/module/catalog?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\"          title=\"Recommended Modules and Services\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Recommended Modules and Services</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Help\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin8583v5mre/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminProducts%253Fversion%253D1.7.0.0%2526country%253Den/Help?_token=pOAlvVQle7ijNP8G-yBcOT2UILn85FXW-BSb7ygQxxg\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Help</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=rupak.karmadhar%40gmail.com&amp;firstname=Md+Tajmilur&amp;lastname=Rahman&amp;website=http%3A%2F%2Frupsar.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin8583v5mre/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=rupak.karmadhar%40gmail.com&amp;firstname=Md+Tajmilur&amp;lastname=Rahman&amp;website=http%3A%2F%2Frupsar.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
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
    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

        </div>
      </div>

    </div>

  
</div>


  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\" \"></i> 13.782s</span>
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
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-EN&amp;utm_content=download\" class=\"footer_link _blank\">
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=rupak.karmadhar%40gmail.com&amp;firstname=Md+Tajmilur&amp;lastname=Rahman&amp;website=http%3A%2F%2Frupsar.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin8583v5mre/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=rupak.karmadhar%40gmail.com&amp;firstname=Md+Tajmilur&amp;lastname=Rahman&amp;website=http%3A%2F%2Frupsar.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
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

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>";
    }
}
