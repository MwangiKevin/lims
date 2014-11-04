<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sekati CodeIgniter Asset Helper
 *
 * @package		Assets
 * @author		Kevin MWangi
 * @copyright	Copyright (c) 2013, Sekati LLC.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://sekati.com
 * @version		v1.2.7
 * @filesource
 *
 * @usage 		$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 * @example		<img src="<?=asset_url();?>imgs/photo.jpg" />
 * @example		<?=img('photo.jpg')?>
 *
 * @install		Copy config/asset.php to your CI application/config directory
 *				& helpers/asset_helper.php to your application/helpers/ directory.
 * 				Then add both files as autoloads in application/autoload.php:
 *
 *				$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 *
 *				Autoload CodeIgniter's url_helper in `application/config/autoload.php`:
 *				$autoload['helper'] = array('url');
 *
 * @notes		Organized assets in the top level of your CodeIgniter 2.x app:
 *					- assets/
 *						-- css/
 *						-- download/
 *						-- img/
 *						-- js/
 *						-- less/
 *						-- swf/
 *						-- upload/
 *						-- xml/
 *					- application/
 * 						-- config/asset.php
 * 						-- helpers/asset_helper.php
 */

/*
|--------------------------------------------------------------------------
| Custom Asset Paths for asset_helper.php
|--------------------------------------------------------------------------
|
| URL Paths to static assets library
|
*/

$config['asset_path'] 		= 	'assets/';
$config['css_path'] 		= 	'assets/css/';
$config['download_path'] 	= 	'assets/download/';
$config['less_path'] 		= 	'assets/less/';
$config['js_path'] 			= 	'assets/js/';
$config['img_path'] 		= 	'img/';
$config['swf_path'] 		= 	'assets/swf/';
$config['upload_path'] 		= 	'assets/upload/';
$config['xml_path'] 		= 	'assets/xml/';
$config['plugin_path']		=	'assets/plugins/';
$config['files_path']		=	'assets/files/';
$config['sass_path']		=	'assets/sass_assets/';

$config['js_files']			=	array(									

									array('title'	=> 	'main'			,	'file'	=>	'main.js')
								);
$config['css_files']		=	array(
									array('title' => 'login'	,	'file'	=>	'login/login.css')
								);

$config['js_theme_files']		=	array(
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/ace-extra.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/ace-elements.min.js'),
										array('title'	=> 'style-additional'		,	'file'	=>	'sass/theme/js/additional-methods.min.js'),
										array('title'	=> 'style'			,	'file'	=>	'sass/theme/js/bootbox.min.js'),
										array('title'	=> 'style-bootstrap'		,	'file'	=>	'sass/theme/js/bootstrap.min.js'),
										array('title'	=> 'style-bootstrap'		,	'file'	=>	'sass/theme/js/bootstrap-colorpicker.min.js'),
										array('title'	=> 'style-bootstrap'		,	'file'	=>	'sass/theme/js/bootstrap-tag.min.js'),
										array('title'	=> 'style-bootstrap'		,	'file'	=>	'sass/theme/js/bootstrap-wysiwyg.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/chosen.jquery.min.js'),
										array('title'	=> 'style-dropzone'			,	'file'	=>	'sass/theme/js/dropzone.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/fullcalendar.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.autosize.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.colorbox-min.js'),
										array('title'	=> 'style-datatables-bootstrapv'		,	'file'	=>	'sass/theme/js/jquery.dataTables.bootstrap.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery-ui.min.js'),
										array('title'	=> 'style-datatablesv'		,	'file'	=>	'sass/theme/js/jquery.dataTables.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.easypiechart.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.gritter.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.hotkeys.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.inputlimiter.1.3.1.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.knob.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.maskedinput.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.mobile.custom.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.nestable.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.slimscroll.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.sparkline.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.ui.touch-punch.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery.validate.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jquery-ui.custom.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/prettify.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/select2.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/spin.min.js'),
										array('title'	=> 'style-date-time'		,	'file'	=>	'sass/theme/js/date-time/moment.min.js'),
										array('title'	=> 'style-date-time'		,	'file'	=>	'sass/theme/js/date-time/bootstrap-datepicker.min.js'),
										array('title'	=> 'style-date-time'		,	'file'	=>	'sass/theme/js/date-time/bootstrap-datetimepicker.min.js'),
										array('title'	=> 'style-date-time'		,	'file'	=>	'sass/theme/js/date-time/bootstrap-timepicker.min.js'),
										array('title'	=> 'style-date-time'		,	'file'	=>	'sass/theme/js/date-time/daterangepicker.min.js'),
										array('title'	=> 'style-flot'					,	'file'	=>	'sass/theme/js/flot/jquery.flot.min.js'),
										array('title'	=> 'style-flot'					,	'file'	=>	'sass/theme/js/flot/jquery.flot.pie.min.js'),
										array('title'	=> 'style-flot'					,	'file'	=>	'sass/theme/js/flot/jquery.flot.resize.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/fuelux/fuelux.spinner.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/fuelux/fuelux.tree.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/fuelux/fuelux.wizard.min.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/fuelux/data/fuelux.tree-sample-demo-data.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jqGrid/i18n/grid.locale-en.js'),
										array('title'	=> 'style'					,	'file'	=>	'sass/theme/js/jqGrid/jquery.jqGrid.min.js'),
										array('title'	=> 'style-markdown'			,	'file'	=>	'sass/theme/js/markdown/bootstrap-markdown.min.js'),
										array('title'	=> 'style-markdown'			,	'file'	=>	'sass/theme/js/markdown/markdown.min.js'),
										array('title'	=> 'style-x-editable'		,	'file'	=>	'sass/theme/js/x-editable/bootstrap-editable.min.js'),
										array('title'	=> 'style-x-editable'		,	'file'	=>	'sass/theme/js/x-editable/ace-editable.min.js'),
										array('title'	=> 'style-jquery'			,	'file'	=>	'sass/theme/ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js'),
										array('title'	=> 'style-bootstrap'		,	'file'	=>	'sass/theme/netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'),
										array('title'	=> 'style-loaded'			,	'file'	=>	'sass/theme/js/ace.min.js')
									);
$config['css_theme_files']		=	array(

										array('title'	=> 'jquery'					,	'file'	=>	'sass/stylesheet/styles.css')
								);

$config['plugin_js_files']	=	array(
									array('title'	=> 'jquery'						,	'file'	=>	'JQuery/jquery-1.10.2.js'),
									array('title'	=> 'dhtmlx'						,	'file'	=>	'dhtmlx/dhtmlx.js'),
									array('title'	=> 'dhtmlxcommon'				,	'file'	=>	'dhtmlx/dhtmlxcommon.js'),
									array('title'	=> 'dhtmlxcombo'				,	'file'	=>	'dhtmlx/dhtmlxcombo.js'),
									array('title'	=> 'dhtmlxcombo_extra'			,	'file'	=>	'dhtmlx/dhtmlxcombo_extra.js'),
									array('title'	=> 'FusionCharts'				,	'file'	=>	'Fusion/FusionCharts/FusionCharts.js'),
									array('title'	=> 'jquery.fancybox.js?v=2.0.6'	,	'file'	=>	'FancyBox/jquery.fancybox.js?v=2.0.6'),
									array('title'	=> 'fancybox'					,	'file'	=>	'FancyBox/jquery.fancybox.pack.js'),
									array('title'	=> 'calendar'					,	'file'	=>	'Calendar/calendar.js'),
									array('title'	=> 'calendar'					,	'file'	=>	'Calendar/jquery.prettyPhoto.js'),
									array('title'	=> 'bootstrap'					,	'file'	=>	'Bootstrap/js/bootstrap.min.js'),
									array('title'	=> 'dataTables'					,	'file'	=>	'DataTables/media/js/jquery.dataTables.js'),
									array('title'	=> 'dataTables-bootstrap'		,	'file'	=>	'data-tables-bootstrap-3/js/dataTables.bootstrap.js'),
									array('title'	=> 'dataTables-bootstrap'		,	'file'	=>	'data-tables-bootstrap-3/js/dataTables.bootstrapPagination.js'),
									array('title'	=> 'jqueryui'					,	'file'	=>	'jquery_ui/js/jquery-ui-1.10.3.custom.js'),
									array('title'	=> 'bootstrap-datepicker'		,	'file'	=>	'bootstrapDatepicker/js/bootstrap-datepicker.js'),
									array('title'	=> 'datepicker'					,	'file'	=>	'datepicker/js/bootstrap-datepicker.js'),
									array('title'	=> 'chartjs'					,	'file'	=>	'Chartjs/Chart.js'),
									array('title'	=> 'highcharts'					,	'file'	=>	'Highcharts/js/highcharts.js'),
									array('title'	=> 'highcharts-adapers'			,	'file'	=>	'Highcharts/js/adapters/prototype-adapter.js'),
									array('title'	=> 'highcharts-adapers'			,	'file'	=>	'Highcharts/js/adapters/mootools-adapter.js'),
									array('title'	=> 'highcharts-adapers'			,	'file'	=>	'Highcharts/js/adapters/standalone-framework-adapers.js'),
									array('title'	=> 'highcharts'					,	'file'	=>	'Highcharts/js/modules/exporting.js'),
									array('title'	=> 'highcharts'					,	'file'	=>	'Highcharts/js/modules/no-data-to-display.js'),
									array('title'	=> 'highchart-canvas'			,	'file'	=>	'Highcharts/js/modules/canvas-tools.js'),
									array('title'	=> 'highcharts_drilldown'		,	'file'	=>	'Highcharts/js/modules/drilldown.js'),
									array('title'	=> 'ajax_file_uploader'			,	'file'	=>	'ajax_file_uploader/ajaxfileupload.js'),
									array('title'	=> 'dropzone'					,	'file'	=>	'dropzone/dropzone.min.js'),
									array('title'	=> 'dropzone-min'					,	'file'	=>	'dropzone/dropzone-amd-module.min.js')
									
								);	
$config['plugin_css_files']	=	array(									
									array('title'	=> 'dataTables-bootstrap'		,	'file'	=>	'data-tables-bootstrap-3/css/dataTables.bootstrap.css'),
									array('title'	=> 'dropzone-basic'				,	'file'	=>	'dropzone/css/basic.css'),
									array('title'	=> 'dropzone'					,	'file'	=>	'dropzone/css/dropzone.css'),
									array('title'   => 'fa'                        	,   'file'    =>    'font-awesome/css/font-awesome.css')

								);
/* End of file asset.php */
