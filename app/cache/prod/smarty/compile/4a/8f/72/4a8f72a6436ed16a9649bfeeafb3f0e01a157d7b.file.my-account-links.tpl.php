<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 21:01:36
         compiled from "/var/www/html/rupsar/themes/classic/templates/customer/_partials/my-account-links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11804588085820dda06e6308-86090540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8f72a6436ed16a9649bfeeafb3f0e01a157d7b' => 
    array (
      0 => '/var/www/html/rupsar/themes/classic/templates/customer/_partials/my-account-links.tpl',
      1 => 1478548468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11804588085820dda06e6308-86090540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5820dda06ef302_83098839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5820dda06ef302_83098839')) {function content_5820dda06ef302_83098839($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
  <i class="material-icons">&#xE5CB;</i>
  <span><?php echo smartyTranslate(array('s'=>'Back to your account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</span>
</a>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
  <i class="material-icons">&#xE88A;</i>
  <span><?php echo smartyTranslate(array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
</a>
<?php }} ?>
