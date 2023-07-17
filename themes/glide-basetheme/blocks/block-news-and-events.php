<?php
/**
 * Block Name: News & Events
 *
 * The template for displaying the custom gutenberg block named Image Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */


// Get all the fields from ACF for this block ID

$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html


// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace( 'acf/', '', $block_glide_name );

// Set the preview thumbnail for this block for gutenberg editor view.
if ( isset( $block['data']['preview_image_help'] ) ) {    /* rendering in inserter preview  */
	echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = ( isset( $block['className'] ) ) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . '-' . $block['id'];

// Making the unique ID for the block.
if ( $block['name'] ) {
	$block_name = $block['name'];
	$block_name = str_replace( '/', '-', $block_name );
	$name       = 'block-' . $block_name;
}

// Block variables
/*
$basethemevar_iat_title        = $block_fields['basethemevar_iat_title'];
$basethemevar_iat_text         = html_entity_decode( $block_fields['basethemevar_iat_text'] );
$basethemevar_iat_button       = $block_fields['basethemevar_iat_button'];
$basethemevar_iat_img_location = $block_fields['basethemevar_iat_img_location'];
$basethemevar_iat_image        = $block_fields['basethemevar_iat_image'];


if ( $basethemevar_iat_img_location == 'left' ) {
	$basethemevar_iat_img_location = 'image-at-left';
} else {
	$basethemevar_iat_img_location = 'image-at-right';
}*/
//  echo '<pre>';
//  print_r($block_fields);
//  echo '</pre>';
$mth_news_events_title = ( isset( $block_fields['mth_news_events_title'] ) ) ? $block_fields['mth_news_events_title'] : null;
$mth_news_events_description = ( isset( $block_fields['mth_news_events_description'] ) ) ? $block_fields['mth_news_events_description'] : null;
$mth_news_and_events_repeater = ( isset( $block_fields['mth_news_and_events_repeater'] ) ) ? $block_fields['mth_news_and_events_repeater'] : null;
$mth_news_events_read_all_post_link = ( isset( $block_fields['mth_news_events_read_all_post_link'] ) ) ? $block_fields['mth_news_events_read_all_post_link'] : null;
?>
<div id="<?php echo $id; ?>"
	class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<section class="section section-news bg-gray">
		<div class="container">
			<header class="section-head">
				<h2><?php echo $mth_news_events_title;?><span class="border-line"></span></h2>
				<p><?php echo html_entity_decode($mth_news_events_description);?></p>
			</header>
			<div class="row-block">
				<?php 
					foreach($mth_news_and_events_repeater as $row){
						$news_image = ( isset( $row['news_image'] ) ) ? $row['news_image'] : null;
						$mth_news_event_rdate = ( isset( $row['mth_news_event_rdate'] ) ) ? $row['mth_news_event_rdate'] : null;
						$mth_news_events_rtitle = ( isset( $row['mth_news_events_rtitle'] ) ) ? $row['mth_news_events_rtitle'] : null;
						$mth_news_events_read_more_link = ( isset( $row['mth_news_events_read_more_link'] ) ) ? $row['mth_news_events_read_more_link'] : null;

					?>
				<article class="news-box col-block-4">
					<div class="news-holder">
						<div class="img-holder">
							<a href="#"><img src="<?php echo $news_image; ?>" alt="" width="370" height="251"></a>
						</div>
						<div class="text-box">
							<time class="date" datetime="2023-01-23"><?php echo $mth_news_event_rdate; ?></time>
							<h3><a href="#"><?php echo $mth_news_events_rtitle; ?></a></h3>
							<div class="link-holder">
								<a href="<?php echo $mth_news_events_read_more_link; ?>" class="link-bordered">Read
									More</a>
							</div>
						</div>
					</div>
				</article>
				<?php 
					}
					?>
			</div>
			<div class="btn-block">
				<a href="<?php echo $mth_news_events_read_all_post_link;?>" class="btn btn-primary">ALL NEWS POSTS</a>
			</div>
		</div>
	</section>

</div>
