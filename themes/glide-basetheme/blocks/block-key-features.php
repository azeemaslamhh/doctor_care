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

// echo '<pre>';
// print_r($block_fields);
// echo '</pre>';
$mth_blk_title = ( isset( $block_fields['mth_blk_title'] ) ) ? $block_fields['mth_blk_title'] : null;
$mth_blk_key_features_bg_img = ( isset( $block_fields['mth_blk_key_features_bg_img'] ) ) ? $block_fields['mth_blk_key_features_bg_img'] : null;
$mth_blk_r_icons = ( isset( $block_fields['mth_blk_r_icons'] ) ) ? $block_fields['mth_blk_r_icons'] : null;

?>

<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<!-- Section Features -->
			<section class="section section-features bg-gray">
				<div class="container">
					<header class="section-head">
						<h2><?php echo $mth_blk_title;?><span class="border-line"></span></h2>
					</header>
					<div class="feature-boxes">
						<?php  
						foreach ($mth_blk_r_icons as $row) {
							?>
						<div class="feature-box">
							<div class="box-holder">
								<div class="ico-holder">
									<img src="<?php echo $row['mth_blk_f_icon'];?>" alt="" width="82" height="101">
								</div>
								<h3><?php echo $row['mth_blk_f_title'];?></h3>
						</div>
						</div>
						<?php
						  }
						  ?>
					</div>
				</div>
			</section>
</div>