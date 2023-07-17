<?php
/**
 * Block Name: MTH Servies
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
// echo '<pre>';
// print_r($block_fields);
// echo '</pre>';
// Block variables


$mth_blk_service_list = ( isset( $block_fields['mth_blk_service_list'] ) ) ? $block_fields['mth_blk_service_list'] : array();
/*echo "<pre>";
print_r($mth_blk_service_list);
exit;
*/

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<section class="services-section">
			<div class="container">
				<div class="services-holder">
					<?php  
					$i=1;
					if(count($mth_blk_service_list)>0){
						foreach($mth_blk_service_list as $row){
					?>
					<div class="services-col">
						<a href="#" class="service-box popup-opener" data="<?php echo $i; ?>">
							<div class="icon-holder">
								<img src="<?php echo $row['mth_blk_service_r_image'];?>" alt="Cardiac Care">
							</div>
							<div class="textbox">
								<h3><?php echo $row['mth_blk_service_r_title'];?></h3>
								<?php echo html_entity_decode($row['mth_blk_service_r_description']);?>
								<span class="read_more">Read More</span>
								<span class="line"></span>
							</div>
						</a>
						<input type="hidden" id="link_<?php echo $i; ?>" value="<?php echo $row['mth_blk_service_r_image']; ?>" />
						<input type="hidden" id="des_<?php echo $i; ?>" value="<?php echo $row['mth_blk_service_r_description']; ?>" />
						<input type="hidden" id="title_<?php echo $i; ?>" value="<?php echo $row['mth_blk_service_r_title']; ?>" />
					</div>			
					<?php 
							$i++;
						}
					}
					?>		
				</div>
			</div>
	</section>
	<div class="services-popup">
		<div class="services-popup-content">
			<a href="#" class="btn-colose popup-close"></a>
			<div class="service-box">
				<div class="icon-holder">
					<img src="images/icon01.png" alt="Cardiac Care" id="popup_image">
				</div>
				<div class="textbox">
					<h3 id="popup_title"></h3>
					<p id="popup_description"></p>
					<a href="#" class="button-close popup-close">Close</a>
				</div>
			</div>
		</div>
	</div>

</div>
