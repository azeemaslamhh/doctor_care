<?php
/**
 * Block Name: Key Features
 *
 * The template for displaying the custom gutenberg block named Key Features.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html

// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace("acf/" , "" , $block_glide_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if( isset( $block['data']['preview_image_help'] )  ) {    /* rendering in inserter preview  */
	echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' .$block_glide_name . "-" . $block['id'];

// Making the unique ID for the block.
if($block['name']){
	$block_name = $block['name'];
	$block_name = str_replace("/" , "-" , $block_name);
	$name = 'block-' .  $block_name;
}

// Block variables
// $custom_field_of_block = html_entity_decode($block_fields['custom_field_of_block']); // for keeping html from input
// $custom_field_of_block = html_entity_remove($block_fields['custom_field_of_block']); // for removing html from input

//  echo '<pre>';
//  print_r($block_fields);
//  echo '</pre>';
$mth_blk_annual_report_pre_img = ( isset( $block_fields['mth_blk_annual_report_pre_img'] ) ) ? $block_fields['mth_blk_annual_report_pre_img'] : null;
$mth_blk_annual_report_sec_img = ( isset( $block_fields['mth_blk_annual_report_sec_img'] ) ) ? $block_fields['mth_blk_annual_report_sec_img'] : null;
$mth_blk_annual_report_title = ( isset( $block_fields['mth_blk_annual_report_title'] ) ) ? $block_fields['mth_blk_annual_report_title'] : null;
$mth_blk_annual_report_description = ( isset( $block_fields['mth_blk_annual_report_description'] ) ) ? $block_fields['mth_blk_annual_report_description'] : null;
$mth_blk_annual_report_button = ( isset( $block_fields['mth_blk_annual_report_button'] ) ) ? $block_fields['mth_blk_annual_report_button'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<!-- Section Two Cols -->
<section class="section section-twocols">
				<div class="container">
					<div class="row-block align-items-center">
						<div class="col-block-6">
							<div class="img-dual">
								<div class="img-first">
									<img src="<?php echo $mth_blk_annual_report_pre_img;?>" alt=""  width="546" height="583">
								</div>
								<div class="img-sec">
									<img src="<?php echo $mth_blk_annual_report_sec_img;?>" alt=""  width="500" height="400">
								</div>
							</div> 
						</div>
						<div class="col-block-6">
							<h1><?php echo html_entity_decode($mth_blk_annual_report_title) ;?><span class="border-line"></span></h1>
							<p><?php echo html_entity_decode($mth_blk_annual_report_description) ;?></p>
							<div class="btn-block">
								<a href="<?php echo $mth_blk_annual_report_button;?>" class="btn btn-primary">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</section>
</div>