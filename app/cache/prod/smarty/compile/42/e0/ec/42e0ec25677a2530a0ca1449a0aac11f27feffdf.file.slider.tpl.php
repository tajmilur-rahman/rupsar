<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 21:01:36
         compiled from "/var/www/html/rupsar/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20769219855820dda0d5cd30-07581333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e0ec25677a2530a0ca1449a0aac11f27feffdf' => 
    array (
      0 => '/var/www/html/rupsar/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1478548468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20769219855820dda0d5cd30-07581333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5820dda0d7b5e4_22341995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5820dda0d7b5e4_22341995')) {function content_5820dda0d7b5e4_22341995($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide hidden-sm-down" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['homeslider']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
    <ul class="carousel-inner" role="listbox">
      <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slide']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['slide']->index++;
 $_smarty_tpl->tpl_vars['slide']->first = $_smarty_tpl->tpl_vars['slide']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeslider']['first'] = $_smarty_tpl->tpl_vars['slide']->first;
?>
        <li class="carousel-item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeslider']['first']) {?>active<?php }?>">
          <figure>
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['legend']), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['slide']->value['title']||$_smarty_tpl->tpl_vars['slide']->value['description']) {?>
              <figcaption class="caption">
                <h2 class="display-1 text-uppercase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2>
                <div class="caption-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
              </figcaption>
            <?php }?>
          </figure>
        </li>
      <?php } ?>
    </ul>
    <div class="direction">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php }?>
<?php }} ?>
