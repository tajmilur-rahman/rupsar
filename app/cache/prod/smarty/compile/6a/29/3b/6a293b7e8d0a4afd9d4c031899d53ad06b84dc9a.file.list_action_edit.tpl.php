<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 16:08:15
         compiled from "/var/www/html/rupsar/admin8583v5mre/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6557920365820ed3f331cb4-37795440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a293b7e8d0a4afd9d4c031899d53ad06b84dc9a' => 
    array (
      0 => '/var/www/html/rupsar/admin8583v5mre/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1478548466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6557920365820ed3f331cb4-37795440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5820ed3f33c7e9_74925983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5820ed3f33c7e9_74925983')) {function content_5820ed3f33c7e9_74925983($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a><?php }} ?>
