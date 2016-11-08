<?php /*%%SmartyHeaderCode:15017335565821d8391cb073-56528783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselector/ps_languageselector.tpl',
      1 => 1478548468,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '15017335565821d8391cb073-56528783',
  'variables' => 
  array (
    'current_language' => 0,
    'languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5821d839204316_34464141',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5821d839204316_34464141')) {function content_5821d839204316_34464141($_smarty_tpl) {?><div id="_desktop_language_selector">
  <div class="language-selector-wrapper">
    <span class="hidden-md-up">Language:</span>
    <div class="language-selector dropdown js-dropdown">
      <span class="expand-more hidden-sm-down" data-toggle="dropdown">English</span>
      <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="hidden-sm-down">
        <i class="material-icons expand-more">&#xE5C5;</i>
      </a>
      <ul class="dropdown-menu hidden-sm-down">
                  <li  class="current" >
            <a href="http://rupsar.local/en/" class="dropdown-item">English</a>
          </li>
                  <li >
            <a href="http://rupsar.local/qc/" class="dropdown-item">Français CA</a>
          </li>
              </ul>
      <select class="link hidden-md-up">
                  <option value="http://rupsar.local/en/" selected="selected">English</option>
                  <option value="http://rupsar.local/qc/">Français CA</option>
              </select>
    </div>
  </div>
</div>
<?php }} ?>
