<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 21:01:36
         compiled from "/var/www/html/rupsar/themes/classic/templates/checkout/_partials/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12285542155820dda0af4ca9-24598095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ce900cb210d39f59e576c001387598d9adae38' => 
    array (
      0 => '/var/www/html/rupsar/themes/classic/templates/checkout/_partials/header.tpl',
      1 => 1478548468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12285542155820dda0af4ca9-24598095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
    'shop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5820dda0b07942_23531438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5820dda0b07942_23531438')) {function content_5820dda0b07942_23531438($_smarty_tpl) {?>

  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-6 hidden-sm-down" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'logo','d'=>'Shop.Theme'),$_smarty_tpl);?>
">
          </a>
        </div>
        <div class="col-md-6 text-xs-right hidden-sm-down">
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

        </div>
        <div class="hidden-md-up text-xs-center mobile">
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

          <div class="pull-xs-left" id="menu-icon">
            <i class="material-icons">&#xE5D2;</i>
          </div>
          <div class="pull-xs-right" id="_mobile_cart"></div>
          <div class="pull-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>



  <div class="header-top hidden-md-up">
    <div class="container">
       <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>

<?php }} ?>
