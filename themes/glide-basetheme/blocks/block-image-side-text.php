<?php
/**
 * Block Name: Image Side Text
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

$mth_image_along_side_text_image        = isset($block_fields['mth_image_along_side_text_image'])? $block_fields['mth_image_along_side_text_image']:null;
$mth_image_along_side_text_text         = isset($block_fields['mth_image_along_side_text_text']) ? $block_fields['mth_image_along_side_text_text']:null;
$mth_image_along_side_text_description       = isset($block_fields['mth_image_along_side_text_description'])? $block_fields['mth_image_along_side_text_description']:null;
$mth_image_along_side_text_link_title = isset($block_fields['mth_image_along_side_text_link_title']) ? $block_fields['mth_image_along_side_text_link_title']:null;
$mth_image_along_side_text_link_title_link = isset($block_fields['mth_image_along_side_text_link_title_link']) ? $block_fields['mth_image_along_side_text_link_title_link']:null;


// if ( $basethemevar_iat_img_location == 'left' ) {
// 	$basethemevar_iat_img_location = 'image-at-left';
// } else {
// 	$basethemevar_iat_img_location = 'image-at-right';
// }
// echo '<pre>';
// print_r($block_fields);
// echo '</pre>';
$mth_blk_title = ( isset( $block_fields['mth_blk_title'] ) ) ? $block_fields['mth_blk_title'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<section class="section section-twocols p-0">
				<div class="container">
					<div class="row-block align-items-center">
						<div class="col-block-6">
							<div class="img-holder">
								<img src="<?php echo $mth_image_along_side_text_image; ?>" alt="">
							</div> 
						</div>
						<div class="col-block-6">
							<h1><?php echo $mth_image_along_side_text_text;?></h1>
							<?php echo html_entity_decode($mth_image_along_side_text_description );?>
							<div class="btn-block">
								<a href="<?php echo $mth_image_along_side_text_link_title_link;?>" class="btn btn-primary"><?php echo $mth_image_along_side_text_link_title;?></a>
							</div>
						</div>
					</div>
				</div>
			</section>

</div>
