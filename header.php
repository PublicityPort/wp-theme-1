<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Theme Palace
	 */

	/**
	 * daily_insight_doctype hook
	 *
	 * @hooked daily_insight_doctype -  10
	 *
	 */
	do_action( 'daily_insight_doctype' );
?>
<!-- Begin 33Across SiteCTRL -->
<script>
var Tynt=Tynt||[];Tynt.push('doX58KQUKr54k5aKkv7mNO');
(function(){var h,s=document.createElement('script');
s.src=(window.location.protocol==='https:'?
'https':'http')+'://cdn.tynt.com/ti.js';
h=document.getElementsByTagName('script')[0];
h.parentNode.insertBefore(s,h);})();
</script>
<!-- End 33Across SiteCTRL -->

<head>
<?php
	/**
	 * daily_insight_before_wp_head hook
	 *
	 * @hooked daily_insight_head -  10
	 *
	 */
	do_action( 'daily_insight_before_wp_head' );

	wp_head(); 
?>
</head>

<body <?php body_class(); ?>>
<?php
	/**
	 * daily_insight_page_start_action hook
	 *
	 * @hooked daily_insight_page_start -  10
	 *
	 */
	do_action( 'daily_insight_page_start_action' ); 

	/**
	 * daily_insight_loader_action hook
	 *
	 */
	do_action( 'daily_insight_before_header' );

	/**
	 * daily_insight_header_action hook
	 *
	 * @hooked daily_insight_header_start -  10
	 * @hooked daily_insight_site_branding -  20
	 * @hooked daily_insight_site_navigation -  30
	 * @hooked daily_insight_header_end -  50
	 * @hooked daily_insight_mobile_nav_menu - 60
	 *
	 */
	do_action( 'daily_insight_header_action' );

	/**
	 * daily_insight_content_start_action hook
	 *
	 * @hooked daily_insight_content_start -  10 
	 * @hooked daily_insight_add_breaking_news_section - 20
	 * @hooked daily_insight_add_main_slider_section - 40
	 * @hooked daily_insight_add_latest_post_section - 50
	 */
	do_action( 'daily_insight_content_start_action' );
?>
