<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Global variables
global $option_fields;
global $pID;
global $fields;

$pID = get_the_ID();

if ( is_home() ) {
	$pID = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_category() || is_search() ) {
	$pID = get_option( 'page_on_front' );
}

if ( function_exists( 'get_fields' ) && function_exists( 'get_fields_escaped' ) ) {
	$option_fields = get_fields_escaped( 'option' );
	$fields        = get_fields_escaped( $pID );
}
// Page Tags - Advanced custom fields variables
$tracking = ( isset( $option_fields['tracking_code'] ) ) ? $option_fields['tracking_code'] : null;
$ccss     = ( isset( $option_fields['custom_css'] ) ) ? $option_fields['custom_css'] : null;
$hscripts = ( isset( $option_fields['head_scripts'] ) ) ? $option_fields['head_scripts'] : null;
$bscripts = ( isset( $option_fields['body_scripts'] ) ) ? $option_fields['body_scripts'] : null;

$basethemevar_tohdr_btn     = isset($option_fields['basethemevar_tohdr_btn']) ? $option_fields['basethemevar_tohdr_btn']:null;
$basethemevar_tohdr_btn_two = isset($option_fields['basethemevar_tohdr_btn_two']) ? $option_fields['basethemevar_tohdr_btn_two']:null;
$basethemevar_tohdr_tbar    = isset($option_fields['basethemevar_tohdr_tbar']) ? $option_fields['basethemevar_tohdr_tbar']:null;
$mth_image_along_side_text = (isset($fields['mth_image_along_side_text']) && $fields['mth_image_along_side_text']!='' ) ? $fields['mth_image_along_side_text'] : get_the_title();
$mth_image_along_side_text_description = (isset($fields['mth_image_along_side_text_description']) && $fields['mth_image_along_side_text_description']!='' ) ? $fields['mth_image_along_side_text_description'] : get_the_title();
$mth_image_along_side_text_link_title_link = (isset($fields['mth_image_along_side_text_link_title_link']) && $fields['mth_image_along_side_text_link_title_link']!='' ) ? $fields['mth_image_along_side_text_link_title_link'] : get_the_title();
// Page variables - Advanced custom fields variables
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<?php
		// Add Head Scripts
	if ( $hscripts != '' ) {
		echo html_entity_decode( $hscripts, ENT_QUOTES );
	}
	?>
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/favicon-16x16.png">
	<link rel="icon" sizes="any"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/favicon.ico">
	<link rel="icon" type="image/svg+xml"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/icon.svg">
	<link rel="manifest"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/site.webmanifest">
	<meta name="theme-color" content="#0047FE">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="BaseTheme Package">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton_color" content="#0047FE">
	<meta name="msapplication-TileColor" content="#0047FE">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="msapplication-TileImage"
		content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/pwa-icon-144.png">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0047FE">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<?php
		// Tracking Code
	if ( $tracking != '' ) {
		echo html_entity_decode( $tracking, ENT_QUOTES );
	}

		// Custom CSS
	if ( $ccss != '' ) {
		echo '<style type="text/css">';
		echo html_entity_decode( $ccss, ENT_QUOTES );
		echo '</style>';
	}
	?>
	<?php wp_head(); ?> <script>
	"serviceWorker" in navigator && window.addEventListener("load", function() {
		navigator.serviceWorker.register("/sw.js").then(function(e) {
			console.log("ServiceWorker registration successful with scope: ", e.scope)
		}, function(e) {
			console.log("ServiceWorker registration failed: ", e)
		})
	});
	</script>
</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?> <?php
if ( $bscripts != '' ) {
	?>
	<div style="display: none;" id='wrapper'>
		<?php echo html_entity_decode( $bscripts, ENT_QUOTES ); ?> </div> <?php } ?> <a
		class="skip-link screen-reader-text"
		href="#page-section"><?php esc_html_e( 'Skip to content', 'basetheme_td' ); ?></a>
	<!-- Header of the page -->

	<div id="wrapper">

		<header id="header">
			<div class="top-bar">
				<div class="container top-bar-holder">
					<strong class="logo"><a href="<?php echo home_url(); ?>"><img
								src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png"
								alt="Punjab Colleges"></a></strong>
					<nav class="nav-small">
						<ul>
							<li><a href="http://modeltownhospital23.azurewebsites.net/laboratory-reports/">Lab
									Reports</a></li>
							<li><a href="http://modeltownhospital23.azurewebsites.net/online-appointment/">Book an
									Appointment</a></li>
						</ul>
						<a href="javascript:;" class="nav-opener"><span></span></a>
					</nav>
				</div>
			</div>
			<div class="navbar">
				<a href="javascript:;" class="nav-opener"><span></span></a>
				<div class="container navbar-holder">
					<?php
							 pgroup_header_navigation()
						?>
					<div class="search-bar">

						<form role="search" method="get" class="search-form"
							action="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ico-search.png"
								alt="" class="ico" width="20" height="20">
							<label>
								<input type="search" class="form-control" placeholder="Search"
									value="<?php echo get_search_query(); ?>" name="s">
							</label>
							<button class="btn-submit" type="submit"><i class="fa fa-chevron-right"></i></button>
						</form>
					</div>
				</div>
			</div>
		</header>
		<?php

	if(is_front_page()){
	?>
		<section class="section-intro">
			<div class="img-bg"
				style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></div>
			<div class="container intro-holder">


				<div class="text-box">
					<h1><?php echo html_entity_decode($mth_image_along_side_text) ;?><span class="border-line"></span>
					</h1>
					<p><?php echo html_entity_decode($mth_image_along_side_text_description) ;?></p>
					<div class="btn-block">
						<a href="<?php $mth_image_along_side_text_link_title_link; ?>" class="btn btn-secondary">Learn
							More</a>
					</div>
				</div>
			</div>

		</section>
		<?php
		}
		?>

		<!-- Main Area Start -->
		<main id="main" class="main-section">
			<?php

if(is_front_page()){
?>
			<span class="img-watermark"><img
					src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-watermark.png" alt=""
					width="696" height="839"></span>
			<span class="img-watermark add"><img
					src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-watermark.png" alt=""
					width="696" height="839"></span>

			<?php
		}
		?>
