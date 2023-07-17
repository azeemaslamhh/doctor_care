<?php
/**
 * Block Name: Board of Trustees
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
// echo '<pre>';
// print_r($block_fields);
// echo '</pre>';
$board_of_trustees_title = ( isset( $block_fields['board_of_trustees_title'] ) ) ? $block_fields['board_of_trustees_title'] : null;
$board_of_trustees_members = ( isset( $block_fields['board_of_trustees_members'] ) ) ? $block_fields['board_of_trustees_members'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	  <section class="section section-members">
                <div class="container">
                    <header class="section-head">
                        <h2><?php echo $board_of_trustees_title;?><span class="border-line"></span></h2>
                    </header>
                    <div class="row-block">

					<?php  
						$i=1;
						foreach ($board_of_trustees_members as $row) {
							?>	

                        <div class="member-box col-block-3">
                            <div class="box-holder">
                                <div class="box-frame">
                                    <div class="img-holder">
                                        <a href="#"><img src="<?php echo $row['board_of_trustees_image']; ?>" alt="" width="278" height="213"></a>
                                    </div>
                                    <div class="text-box">
                                        <h5><a href="#"><?php echo $row['board_of_trustees_title']; ?></a></h5>
                                        <strong class="info-text"><?php echo $row['board_of_trustees_designation']; ?></strong>
                                    </div>
                                </div>
							<?php // if($row['board_of_trustees_about_detail']!="") { ?>
                                <div class="link-holder">
                                    <a data="<?php echo $i; ?>" href="#" class="link-bordered popup-opener">Read More</a>
                                </div>                                
								<?php //  }?>
                            </div>
                        </div>
						<input type="hidden" id="link_<?php echo $i; ?>" value="<?php echo $row['board_of_trustees_image']; ?>" />
						<input type="hidden" id="des_<?php echo $i; ?>" value="<?php echo $row['board_of_trustees_about_detail']; ?>" />
						<input type="hidden" id="title_<?php echo $i; ?>" value="<?php echo $row['board_of_trustees_title']; ?>" />

						<?php 
						$i++;
						} 
					?>
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
