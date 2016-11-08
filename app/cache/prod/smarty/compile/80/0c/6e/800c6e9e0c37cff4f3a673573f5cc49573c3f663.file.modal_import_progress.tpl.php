<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 16:08:29
         compiled from "/var/www/html/rupsar/admin8583v5mre/themes/default/template/controllers/import/modal_import_progress.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6842798015820ed4d31bd67-22085603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '800c6e9e0c37cff4f3a673573f5cc49573c3f663' => 
    array (
      0 => '/var/www/html/rupsar/admin8583v5mre/themes/default/template/controllers/import/modal_import_progress.tpl',
      1 => 1478548466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6842798015820ed4d31bd67-22085603',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5820ed4d322782_23421299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5820ed4d322782_23421299')) {function content_5820ed4d322782_23421299($_smarty_tpl) {?>
<div class="modal-body">
	<div class="alert alert-warning" id="import_details_stop" style="display:none;">
		Aborting, please wait...
	</div>
	<p id="import_details_progressing">
		Importing your data...
	</p>
	<div class="alert alert-success" id="import_details_finished" style="display:none;">
		Data imported!
		<br/>
		Look at your listings to make sure it's all there as you wished.
	</div>
	<div id="import_messages_div" style="max-height:250px; overflow:auto;">
		<div class="alert alert-danger" id="import_details_error" style="display:none;">
			Errors occurred:<br/><ul></ul>
		</div>
		<div class="alert alert-warning" id="import_details_post_limit" style="display:none;">
			Warning, the current import MAY require a PHP setting update, to allow more
			data to be transferred. If the current import stops before the end, you should increase your PHP "post_max_size" setting to
			<span id="import_details_post_limit_value">16MB</span> at least, and try again.
		</div>
		<div class="alert alert-warning" id="import_details_warning" style="display:none;">
			Some errors were detected. Please check the details:<br/><ul></ul>
		</div>
		<div class="alert alert-info" id="import_details_info" style="display:none;">
			We made the following adjustments:<br/><ul></ul>
		</div>
	</div>

	<div id="import_validate_div" style="margin-top:17px;">
		<div class="pull-right" id="import_validation_details" default-value="Validating data...">
			&nbsp;
		</div>
		<div class="progress active progress-striped" style="display: block; width: 100%">
			<div class="progress-bar progress-bar-info" role="progressbar" style="width: 0%" id="validate_progressbar_done">
				<span><span id="validate_progression_done">0</span>% Validated</span>
			</div>
			<div class="progress-bar progress-bar-info" role="progressbar" id="validate_progressbar_next" style="opacity: 0.5 ;width: 0%">
				<span class="sr-only">Processing next page...</span>
			</div>
		</div>
	</div>

	<div id="import_progress_div" style="display:none;">
		<div class="pull-right" id="import_progression_details" default-value="Importing data...">
			&nbsp;
		</div>
		<div class="progress active progress-striped" style="display: block; width: 100%">
			<div class="progress-bar progress-bar-info" role="progressbar" style="width: 0%" id="import_progressbar_done2">
				<span>Linking accessories...</span>
			</div>
			<div class="progress-bar progress-bar-success" role="progressbar" style="width: 0%" id="import_progressbar_done">
				<span><span id="import_progression_done">0</span>% Imported</span>
			</div>
			<div class="progress-bar progress-bar-success progress-bar-stripes active" role="progressbar" id="import_progressbar_next" style="opacity: 0.5 ;width: 0%">
				<span class="sr-only">Processing next page...</span>
			</div>
		</div>
	</div>

	<div class="input-group">
		<button type="button" class="btn btn-primary" tabindex="-1" id="import_continue_button" style="display: none;">
			Ignore warnings and continue?
		</button>
		&nbsp;
		<button type="button" class="btn btn-default" tabindex="-1" id="import_stop_button">
			Abort import
		</button>
		&nbsp;
		<button type="button" class="btn btn-success" data-dismiss="modal" tabindex="-1" id="import_close_button" style="display: none;">
			Close
		</button>
	</div>
</div>
<?php }} ?>
