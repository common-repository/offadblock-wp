<?php
/*
Plugin Name: offadblock-wp 
Plugin URI: 
Description: The plugin reacts to the active adblock plugin, prohibiting or limiting the user's capabilities.
Version: 1.0
Author: dualon
Author URI: 
License: GPL2
Text Domain: offadblock-wp
Domain Path: /languages/
*/
?>
<?php
/*  Copyright 2017  Dmitry Avsievich  (email : dualon19@gmail.com)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php if ( ! defined( 'ABSPATH' ) ) exit;
function offab_load_plugin_textdomainw() {
  load_plugin_textdomain( 'offadblock-wp', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'offab_load_plugin_textdomainw' );


// Start the main function
if (!is_admin()){	$p4=get_option('offduab_text4');
$pr=get_option('offduab_razmer');
$pr3=get_option('offduab_blocks');

if(!isset($_COOKIE['oab_cooks'])) {
global $cookglobal;$cookglobal = 0;}
else {global $cookglobal;$cookglobal = 1;}
if (($pr==1)||($pr==6)||(($pr3==1)&&($pr!=4))){	
add_action( 'wp_footer', 'OffAdBlock' );
}
if (($pr==4)&&($_SERVER['REQUEST_URI']!=$p4)){
add_action( 'init', 'OffAdBlock' );
}
}
function OffAdBlock(){
	$pr=get_option('offduab_razmer');global $cookglobal;
	$pcook=get_option('offduab_cooks');
	
//We assign a unique id so that the adblock can not block it
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
	$randstringg = '';
	$randsmall= '';
    for ($i = 0; $i < 10; $i++) {
        $randstring =$randstring.$characters[rand(0, strlen($characters))];
		$randstringg =$randstringg.$characters[rand(0, strlen($characters))];
		$randsmall =$randsmall.$characters[rand(0, strlen($characters))];
    }
$randstringg ='center_alertMX'.$randstringg;
$randstring ='center_alertab'.$randstring;
$randsmall ='small_alertab'.$randsmall;
	if ($pcook==1){
	if (($cookglobal==1)&&($pr==1)){$pr='0';}}
	$pr3=get_option('offduab_blocks');
if ($pr==1){
 wp_enqueue_style( 'dualon12_css', plugins_url('/css/dual_1_2_css.css', __FILE__) );
	echo "<div id=\"$randstringg\"><div id=\"$randstring\"></div></div>";
 
	}
if ($pr==6){wp_enqueue_style( 'dualon12_css', plugins_url('/css/dual_1_2_css.css', __FILE__) );
echo "<div id=\"$randsmall\"></div>";}
if ($pr3==1){wp_enqueue_style( 'dualon3_css', plugins_url('/css/dual_3_css.css', __FILE__) );    }  
	$p1=get_option('offduab_text1');
		$p10=get_option('offduab_color_0');
		$p6=get_option('offduab_text6');
		$t2=get_option('offduab_timer2');
	$p31=get_option('offduab_text31');
	$p33=get_option('offduab_color_1');
	$p34=get_option('offduab_color_2');
	$p61=get_option('offduab_color_61');
	$p62=get_option('offduab_color_62');
	$p30=get_option('offduab_banner_css');
	$p4=get_option('offduab_text4');
	$wtop=get_option('offduab_top2');
	$wleft=get_option('offduab_left2');
	$wheight=get_option('offduab_height2');
	$wwidth=get_option('offduab_width2');
	$pr5=get_option('offduab_blocksize');
 wp_register_script( 'ads', plugin_dir_url(__FILE__) . 'js/ads.js', array(), false);
 wp_enqueue_script('ads');
wp_register_script( 'ddujs', plugin_dir_url(__FILE__) . 'js/dujs.js', array(), false);
wp_localize_script( 'ddujs', 'pr', $pr);
wp_localize_script( 'ddujs', 'alertMX', $randstringg);
wp_localize_script( 'ddujs', 'alertab', $randstring);
wp_localize_script( 'ddujs', 'alertsmall', $randsmall);
wp_localize_script( 'ddujs', 'pr3', $pr3);
wp_localize_script( 'ddujs', 'pr5', $pr5);
wp_localize_script( 'ddujs', 'p1', $p1);
wp_localize_script( 'ddujs', 'p10', $p10);
wp_localize_script( 'ddujs', 'objectL10n', array(
        'wait'  => __( 'Wait', 'offadblock-wp' ),
        'sec' => __( 'sec', 'offadblock-wp' ),) );
wp_localize_script( 'ddujs', 'p6', $p6);
wp_localize_script( 'ddujs', 't2', $t2);
wp_localize_script( 'ddujs', 'p31', $p31);
wp_localize_script( 'ddujs', 'p33', $p33);
wp_localize_script( 'ddujs', 'p34', $p34);
wp_localize_script( 'ddujs', 'p61', $p61);
wp_localize_script( 'ddujs', 'p62', $p62);
wp_localize_script( 'ddujs', 'p30', $p30);
wp_localize_script( 'ddujs', 'p4', $p4);
wp_localize_script( 'ddujs', 'pcook', $pcook);
wp_localize_script( 'ddujs', 'wtop', $wtop);
wp_localize_script( 'ddujs', 'wleft', $wleft);
wp_localize_script( 'ddujs', 'wheight', $wheight);
wp_localize_script( 'ddujs', 'wwidth', $wwidth);


wp_enqueue_script('ddujs');





}
function admin_dualon(){ 
	wp_enqueue_style( 'dualonAdmin_css', plugins_url('/css/dual_admin_css.css', __FILE__) ); 
	load_template( dirname( __FILE__ ) . '/dualon_admin.php' );	
 
}
function offab_catalog_admin_menu(){
    add_menu_page('OffAdBlock', 'OffAdBlock', 8, basename(__FILE__), 'admin_dualon',plugin_dir_url( __FILE__ ) .'dab-oab-icon.png',99);
	
}

function offadblock_shor($atts, $content = '') {
        return "<div class='oab-shoot'> $content </div>";
}
 
add_shortcode( 'offadblock_shor', 'offadblock_shor' );     
function offab_enqueue_plugin_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["oab_button_plagin"] =  plugin_dir_url(__FILE__) . "js/buttonwp.js";
    return $plugin_array;
}
function offab_register_buttons_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "oab_but");
    return $buttons;
}

add_filter("mce_buttons", "offab_register_buttons_editor");
add_filter("mce_external_plugins", "offab_enqueue_plugin_scripts");


add_action( 'admin_print_footer_scripts', 'oab_add_quicktags' );
function oab_add_quicktags(){
	 if (wp_script_is('quicktags')){		 
?>
  <script type="text/javascript"> 
  QTags.addButton( 'oab_shoot', 'OAB', '[offadblock_shor]', '[/offadblock_shor]', 'o', 'offAdblock plugin button', 1 );   
  </script>
<?php 
    }
}


/* include the Iris Color Picker 
----------------------------------------------------------------- */
function offab_add_admin_iris_scripts( $hook ){
	
	wp_enqueue_script( 'wp-color-picker' );
	wp_enqueue_style( 'wp-color-picker' );
	
	wp_enqueue_script('plugin-script', plugins_url('js/plugin-script.js', __FILE__), array('wp-color-picker'), false, 1 );
}
add_action( 'admin_enqueue_scripts', 'offab_add_admin_iris_scripts' );

add_action('admin_menu', 'offab_catalog_admin_menu');

?>