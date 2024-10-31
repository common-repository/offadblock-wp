<?php
/* This file is part of the offadblock-wp plugin for wordpress */

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
if ( ! defined( 'ABSPATH' ) ) exit;
if( ! defined('WP_UNINSTALL_PLUGIN') ) exit;
delete_option('offduab_razmer');
delete_option('offduab_blocks');
delete_option('offduab_text1');
delete_option('offduab_timer2');
delete_option('offduab_text31');
delete_option('offduab_text32');
delete_option('offduab_color_0');
delete_option('offduab_color_1');
delete_option('offduab_color_2');
delete_option('offduab_color_61');
delete_option('offduab_color_62');
delete_option('offduab_text6');
delete_option('offduab_banner_css');
delete_option('offduab_text4');
delete_option('offduab_cooks');
delete_option('offduab_top2');
delete_option('offduab_left2');
delete_option('offduab_height2');
delete_option('offduab_width2');
delete_option('offduab_blocksize');
?>