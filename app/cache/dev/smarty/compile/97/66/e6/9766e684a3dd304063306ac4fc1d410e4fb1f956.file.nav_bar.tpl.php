<?php /* Smarty version Smarty-3.1.19, created on 2016-12-10 00:05:04
         compiled from "/var/www/html/rupsar/admin8583v5mre/themes/new-theme/template/components/layout/nav_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:997888464584b8d00b853e5-07605200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9766e684a3dd304063306ac4fc1d410e4fb1f956' => 
    array (
      0 => '/var/www/html/rupsar/admin8583v5mre/themes/new-theme/template/components/layout/nav_bar.tpl',
      1 => 1481338654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '997888464584b8d00b853e5-07605200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabs' => 0,
    'level1' => 0,
    'level1Href' => 0,
    'level1Name' => 0,
    'level2' => 0,
    'level2Href' => 0,
    'level2Name' => 0,
    'level3' => 0,
    'level3Href' => 0,
    'level3Name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584b8d00c3f967_12839404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584b8d00c3f967_12839404')) {function content_584b8d00c3f967_12839404($_smarty_tpl) {?>
<nav class="nav-bar">
  <ul class="main-menu">

    <?php  $_smarty_tpl->tpl_vars['level1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level1']->key => $_smarty_tpl->tpl_vars['level1']->value) {
$_smarty_tpl->tpl_vars['level1']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['level1']->value['active']) {?>

        <?php $_smarty_tpl->tpl_vars['level1Href'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level1']->value['href'],'html','UTF-8'), null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'])&&isset($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'][0]['href'])) {?>
          <?php $_smarty_tpl->tpl_vars['level1Href'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'][0]['href'],'html','UTF-8'), null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['level1Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level1']->value['name'],'html','UTF-8'), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['level1']->value['name']=='') {?>
          <?php $_smarty_tpl->tpl_vars['level1Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level1']->value['class_name'],'html','UTF-8'), null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['level1']->value['icon']!='') {?>

          <li class="link-levelone <?php if ($_smarty_tpl->tpl_vars['level1']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level1']->value['id_tab'];?>
">
            <a href="<?php echo $_smarty_tpl->tpl_vars['level1Href']->value;?>
" class="link" >
              <i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['level1']->value['icon'];?>
</i> <span><?php echo $_smarty_tpl->tpl_vars['level1Name']->value;?>
</span>
            </a>
          </li>

        <?php } else { ?>

          <li class="category-title <?php if ($_smarty_tpl->tpl_vars['level1']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level1']->value['id_tab'];?>
">
              <span class="title"><?php echo $_smarty_tpl->tpl_vars['level1Name']->value;?>
</span>
          </li>

            <?php  $_smarty_tpl->tpl_vars['level2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level1']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level2']->key => $_smarty_tpl->tpl_vars['level2']->value) {
$_smarty_tpl->tpl_vars['level2']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['level2']->value['active']) {?>

                <?php $_smarty_tpl->tpl_vars['level2Href'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level2']->value['href'],'html','UTF-8'), null, 0);?>

                <?php $_smarty_tpl->tpl_vars['level2Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level2']->value['name'],'html','UTF-8'), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['level2']->value['name']=='') {?>
                  <?php $_smarty_tpl->tpl_vars['level2Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level2']->value['class_name'],'html','UTF-8'), null, 0);?>
                <?php }?>

                <li class="link-levelone <?php if ($_smarty_tpl->tpl_vars['level2']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level2']->value['id_tab'];?>
">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['level2Href']->value;?>
" class="link">
                    <i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['level2']->value['icon'];?>
</i> <span><?php echo $_smarty_tpl->tpl_vars['level2Name']->value;?>
</span>
                  </a>
                    <?php if (count($_smarty_tpl->tpl_vars['level2']->value['sub_tabs'])) {?>
                      <ul class="submenu">
                        <?php  $_smarty_tpl->tpl_vars['level3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level2']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level3']->key => $_smarty_tpl->tpl_vars['level3']->value) {
$_smarty_tpl->tpl_vars['level3']->_loop = true;
?>
                          <?php if ($_smarty_tpl->tpl_vars['level3']->value['active']) {?>

                            <?php $_smarty_tpl->tpl_vars['level3Href'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level3']->value['href'],'html','UTF-8'), null, 0);?>

                            <?php $_smarty_tpl->tpl_vars['level3Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level3']->value['name'],'html','UTF-8'), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['level3']->value['name']=='') {?>
                              <?php $_smarty_tpl->tpl_vars['level3Name'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level3']->value['class_name'],'html','UTF-8'), null, 0);?>
                            <?php }?>

                            <li class="link-leveltwo <?php if ($_smarty_tpl->tpl_vars['level3']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level3']->value['id_tab'];?>
">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['level3Href']->value;?>
" class="link"> <?php echo $_smarty_tpl->tpl_vars['level3Name']->value;?>

                              </a>
                            </li>

                          <?php }?>
                        <?php } ?>
                      </ul>
                    <?php }?>
                </li>
              <?php }?>
            <?php } ?>

        <?php }?>

      <?php }?>
    <?php } ?>
  </ul>

  <span class="menu-collapse">
    <i class="material-icons">&#xE8EE;</i>
  </span>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminNavBarBeforeEnd'),$_smarty_tpl);?>


</nav>
<?php }} ?>
