<?php
/**
 * Delete our options when this plugin is deleted
 * @since 1.0.41 This uninstall is depractated but can still be used by commenting out below query.
 */
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
/*
global $wpdb;
$options = array(
	'unitizr_cstitle_field',
	'unitizr_csdescription_field',
	'unitizr_wndproduct_field',
	'unitizr_wndinwidth_field',
	'unitizr_wndtaxbase_field',
	'unitizr_begin_label',
	'unitizr_wndinppd_field',
	'unitizr_wndnada_field',
	'unitizr_wndmatch_field'
);
foreach( $options as $option ) {
	delete_option( $option );
} */ 
