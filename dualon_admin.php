<?php if ( ! defined( 'ABSPATH' ) ) exit; if( current_user_can('manage_options') ){?>
<div class="wrap">
<h2><?php _e( 'Settings plugin offadblock-wp.', 'offadblock-wp' ); ?></h2>
<form method="post" action="options.php">
	<?php wp_nonce_field('update-options'); ?>
</br>
<a class="dual_adm_submit" href="plugin-editor.php?file=offadblock-wp/offadblock-wp.php"><?php _e( 'Edit css files plugin.', 'offadblock-wp' ); ?></a><p style="color:red" > <?php _e( 'Only for advanced users!', 'offadblock-wp' ); ?></p>
</br>
<hr>
<input type="radio" name="offduab_razmer"  value="0"<?php checked( '0', get_option( 'offduab_razmer' ) ); ?> onchange="hide(0)"> <?php _e( 'Deactivate the plugin.', 'offadblock-wp' ); ?>
</br>
<hr>
<input type="radio" name="offduab_razmer"  value="1"<?php checked( '1', get_option( 'offduab_razmer' ) ); ?> onchange="hide(1)" >  <?php _e( 'Message box.', 'offadblock-wp' ); ?>
<p class="dual_adm_o" >
<table id="du1" class="dual_adm_o" style="display:<?php $pr=get_option('offduab_razmer'); if($pr==1){echo "inline-block";}else{echo "none";}?>" >
<tr>
<td class="dual_adm_left"> <?php _e( 'The contents of the window:', 'offadblock-wp' ); ?> </td>
<td class="dual_adm_right"><?php 
wp_editor( get_option('offduab_text1'), 'offduab_text1',array(
	'wpautop'       => 1,
	'media_buttons' => 1,
	'textarea_name' => 'offduab_text1',
	'textarea_rows' => 5,
	'tabindex'      => null,
	'editor_css'    => '',
	'editor_class'  => '',
	'teeny'         => 0,
	'dfw'           => 0,
	'tinymce'       => 1,
	'quicktags'     => 1,
	'drag_drop_upload' => false
));
?></td> 
</tr>
<tr>
<td class="dual_adm_left"> <?php _e( 'Screen background color', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"><input name="offduab_color_0" type="text" value="<?php echo get_option('offduab_color_0') ?>" /></td>
</tr>
<tr>
<td class="dual_adm_left"><?php _e( 'Window Close Time:', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"><input type="text" name="offduab_timer2" value="<?php echo get_option('offduab_timer2') ?>" /><?php _e( ' (Leave empty to disable the timer)', 'offadblock-wp' ); ?></td>
</tr>
<tr><td>
<input type="checkbox" name="offduab_cooks"  value="1"<?php checked( '1', get_option( 'offduab_cooks' ) ); ?> ></td><td><?php _e( 'Show the plugin window only once a day for the user. (Does not apply to shortcodes)', 'offadblock-wp' ); ?>
</td></tr>
<tr><td>
<input id="du5check" type="checkbox" name="offduab_blocksize"  value="1"<?php checked( '1', get_option( 'offduab_blocksize' ) ); ?> onclick="hidet()"></td><td><?php _e( 'Set your own size for the opening window', 'offadblock-wp' ); ?>
</td></tr>
<table id="du5" class="dual_adm_o" style="display:<?php $pr5=get_option('offduab_blocksize'); if($pr5==1){echo "inline-block";}else{echo "none";}?>">
<tr><td class="dual_adm_left"><?php _e( 'Window Top (%):', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"><input type="text" name="offduab_top2" value="<?php echo get_option('offduab_top2') ?>" /> %</td></tr>
<tr><td class="dual_adm_left"><?php _e( 'Window Width (%):', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"><input type="text" name="offduab_width2" value="<?php echo get_option('offduab_width2') ?>" /> %</td></tr>
<tr><td class="dual_adm_left"><?php _e( 'Window Height* (%):', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"><input type="text" name="offduab_height2" value="<?php echo get_option('offduab_height2') ?>" /> %<?php _e( ' (Leave "0" for auto height adjustment)', 'offadblock-wp' ); ?></td></tr>
</table>
</table>
</p>
<hr>
<p class="dual_adm_o">
<table id="du4" class="dual_adm_o" style="display:<?php $pr=get_option('offduab_razmer'); if($pr==4){echo "inline-block";}else{echo "none";}?>" >
<tr>
<input type="radio" name="offduab_razmer"  value="4"<?php checked( '4', get_option( 'offduab_razmer' ) ); ?>onchange="hide(4)" >  <?php _e( 'Go to the specified page.', 'offadblock-wp' ); ?>
</tr>
</br>
<tr>
<td class="dual_adm_left"> <?php _e( 'Page URL:', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"><input type="text" name="offduab_text4" value="<?php echo get_option('offduab_text4') ?>" /></td>
</tr>
</table>
</p>
<hr>
<p class="dual_adm_o" >
<table id="du6" class="dual_adm_o" style="display:<?php $pr=get_option('offduab_razmer'); if($pr==6){echo "inline-block";}else{echo "none";}?>" >
<tr>
<input type="radio" name="offduab_razmer"  value="6"<?php checked( '6', get_option( 'offduab_razmer' ) ); ?> onchange="hide(6)" >  <?php _e( 'Small window in the corner of the screen.', 'offadblock-wp' ); ?>
</tr></br>
<tr>
<td class="dual_adm_left"> <?php _e( 'The inscription in the window:', 'offadblock-wp' ); ?> </td>
<td class="dual_adm_right"><?php 
wp_editor( get_option('offduab_text6'), 'offduab_text6',array(
	'wpautop'       => 1,
	'media_buttons' => 1,
	'textarea_name' => 'offduab_text6',
	'textarea_rows' => 5,
	'tabindex'      => null,
	'editor_css'    => '',
	'editor_class'  => '',
	'teeny'         => 0,
	'dfw'           => 0,
	'tinymce'       => 1,
	'quicktags'     => 1,
	'drag_drop_upload' => false
));
?></td> 
</tr>
<tr>
<td class="dual_adm_left"> <?php _e( 'Color of the window:', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"> <input name="offduab_color_61" type="text" value="<?php echo get_option('offduab_color_61') ?>" /></td>
</tr>
<tr>
<td class="dual_adm_left"> <?php _e( 'Text color:', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"> <input name="offduab_color_62" type="text" value="<?php echo get_option('offduab_color_62') ?>" /></td> 
</tr>
</table>
</p>

<hr>
<p class="dual_adm_o" >
<table id="du3" class="dual_adm_o" style="display:<?php $pr3=get_option('offduab_blocks'); if($pr3==1){echo "inline-block";}else{echo "none";}?>">
<tr>
<input id="du3check" type="checkbox" name="offduab_blocks"  value="1"<?php checked( '1', get_option( 'offduab_blocks' ) ); ?> onclick="hidet()"><?php _e( 'Hide the blocks inside the shortcodes.', 'offadblock-wp' ); ?>
</tr>
<tr>
<td class="dual_adm_left"><?php _e( 'The inscription on the blocks:', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"><?php 
wp_editor( get_option('offduab_text31'), 'offduab_text31',array(
	'wpautop'       => 1,
	'media_buttons' => 1,
	'textarea_name' => 'offduab_text31',
	'textarea_rows' => 5,
	'tabindex'      => null,
	'editor_css'    => '',
	'editor_class'  => '',
	'teeny'         => 0,
	'dfw'           => 0,
	'tinymce'       => 1,
	'quicktags'     => 1,
	'drag_drop_upload' => false
));
?></td> 
</tr>
</br>
<tr>
<td class="dual_adm_left"> <?php _e( 'Color of the window:', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"> <input name="offduab_color_1" type="text" value="<?php echo get_option('offduab_color_1') ?>" /></td>
</tr>
</br>
<tr>
<td class="dual_adm_left"> <?php _e( 'Text color:', 'offadblock-wp' ); ?></td>
<td class="dual_adm_right"> <input name="offduab_color_2" type="text" value="<?php echo get_option('offduab_color_2') ?>" /></td> 
</tr>
</br>
<td> <input type="checkbox" name="offduab_banner_css"  value="1"<?php checked( '1', get_option( 'offduab_banner_css' ) ); ?> > <?php _e( 'Use css file', 'offadblock-wp' ); ?></td> 
</tr>
</table>
</p>


<hr>


</br>


<input type="hidden" name="page_options" value="offduab_text1,offduab_timer2,offduab_top2,offduab_left2,offduab_text6,offduab_color_61,offduab_color_62,offduab_height2,offduab_width2,offduab_text31,offduab_cooks,offduab_text4,offduab_razmer,offduab_color_1,offduab_color_2,offduab_banner_css,offduab_blocks,offduab_blocksize,offduab_color_0" />
	<input type="hidden" name="action" value="update" />
	
<input class="dual_adm_submit" type="submit" name="update" value=" <?php _e( 'Save', 'offadblock-wp' ); ?>">
 
</form>
</br>


</div>


<script type="text/javascript">

function hide(razmer){	
jQuery('#du1').css("display","none");
jQuery('#du2').css("display","none");
jQuery('#du4').css("display","none");
jQuery('#du6').css("display","none");


if (razmer == 1){jQuery("#du1").css("display","inline-block");
}
if (razmer == 2){jQuery("#du2").css("display","inline-block");
}
if (razmer == 4){jQuery("#du4").css("display","inline-block");
}
if (razmer == 6){jQuery("#du6").css("display","inline-block");
}}	
function hidet(){ 
if (jQuery("#du3check").is(':checked') == true){jQuery("#du3").css("display","inline-block");}else{jQuery("#du3").css("display","none");}
if (jQuery("#du5check").is(':checked') == true){jQuery("#du5").css("display","inline-block");}else{jQuery("#du5").css("display","none");}
}
</script>
<?php } ?>