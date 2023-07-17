<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;


// $basethemevar_pagetitle = (isset($fields['basethemevar_pagetitle'])) ? $fields['basethemevar_pagetitle'] : null;
// if(!$basethemevar_pagetitle){
// 	$basethemevar_pagetitle = get_the_title();
// }
//print_r($fields);
$basethemevar_pagetitle = glide_page_title('basethemevar_pagetitle');


$about_us_title = ( isset( $fields['mth_blk_inner_banner_title'] ) ) ? $fields['mth_blk_inner_banner_title'] : null;
if(empty($about_us_title)){

	$about_us_title= $basethemevar_pagetitle;
}

?>

 <!-- Breadcrumb -->
        <nav class="nav-breadcrumb">
            <div class="container">
                <div class="breadcrumb-holder">
					<?php my_breadcrumbs(); ?>
                </div>
            </div>
        </nav>
<!-- Section Intro -->

<section class="section-banner">
			<div class="img-bg" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></div>
			<div class="container banner-holder">
				
				<h1><?php echo $about_us_title;?></h1>
                <div class="btn-block">
                    <a href="<?php echo get_home_url(); ?>" class="btn btn-secondary-outline">
					<?php 
					if (is_page() && is_page(99)) {
						echo 'Back To About';
					}
					else{
						echo 'Back To Home';
					}
					?>
					</a>
                </div>
			</div>
			
		</section>


<section id="page-section" class="page-section">
	<!-- Content Start -->

	<?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', 'page' );

	} ?>

	<div class="clear"></div>
	<div class="ts-80"></div>

	<!-- Content End -->
</section>

<?php get_footer(); ?>