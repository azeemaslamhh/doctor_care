<?php
/**
 * Block Name: Image Alongside Text
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

$basethemevar_iat_title        = $block_fields['basethemevar_iat_title'];
$basethemevar_iat_text         = html_entity_decode( $block_fields['basethemevar_iat_text'] );
$basethemevar_iat_button       = $block_fields['basethemevar_iat_button'];
$basethemevar_iat_image        = $block_fields['basethemevar_iat_image'];


if ( $basethemevar_iat_image == 'left' ) {
	$basethemevar_iat_image = 'image-at-left';
} else {
	$basethemevar_iat_image = 'image-at-right';
}
//  echo '<pre>';
// print_r($block_fields);
//  echo '</pre>';
$basethemevar_iat_title = ( isset( $block_fields['basethemevar_iat_title'] ) ) ? $block_fields['basethemevar_iat_title'] : null;
$basethemevar_iat_text = ( isset( $block_fields['basethemevar_iat_text'] ) ) ? $block_fields['basethemevar_iat_text'] : null;
$basethemevar_iat_button = ( isset( $block_fields['basethemevar_iat_button'] ) ) ? $block_fields['basethemevar_iat_button'] : null;
$basethemevar_iat_image = ( isset( $block_fields['basethemevar_iat_image'] ) ) ? $block_fields['basethemevar_iat_image'] : null;

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<section class="section section-twocols p-0">
				<div class="container">
					<div class="row-block align-items-center">
						<div class="col-block-6">
							<div class="img-holder">
								<img src="<?php echo $basethemevar_iat_image;?>" alt="">
							</div> 
						</div>
						<div class="col-block-6">
							<h1><?php echo html_entity_decode($basethemevar_iat_title);?><span class="border-line"></span></h1>
							<p><?php echo html_entity_decode($basethemevar_iat_text) ;?></p>
							<div class="btn-block">
								<a href="<?php echo $basethemevar_iat_button;?>" class="btn btn-primary">Find a Doctor</a>
							</div>
						</div>
					</div>
				</div>
			</section>

</div>
