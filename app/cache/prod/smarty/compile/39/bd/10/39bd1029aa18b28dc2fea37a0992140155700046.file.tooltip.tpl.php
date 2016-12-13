<?php /* Smarty version Smarty-3.1.19, created on 2016-12-09 23:41:53
         compiled from "/var/www/html/rupsar/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6785658055820ecc5ccf396-93188993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39bd1029aa18b28dc2fea37a0992140155700046' => 
    array (
      0 => '/var/www/html/rupsar/modules/welcome/views/templates/tooltip.tpl',
      1 => 1481338687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6785658055820ecc5ccf396-93188993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5820ecc5cd3c35_47943162',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5820ecc5cd3c35_47943162')) {function content_5820ecc5cd3c35_47943162($_smarty_tpl) {?>

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
