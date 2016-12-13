<?php /* Smarty version Smarty-3.1.19, created on 2016-12-09 23:41:53
         compiled from "/var/www/html/rupsar/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18655929605820ecc5cc1b04-68566515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac9ec5bd70e6d64063d20ed6ab71594d33fe9ef' => 
    array (
      0 => '/var/www/html/rupsar/modules/welcome/views/templates/lost.tpl',
      1 => 1481338687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18655929605820ecc5cc1b04-68566515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5820ecc5cca8f0_11958395',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5820ecc5cca8f0_11958395')) {function content_5820ecc5cca8f0_11958395($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
