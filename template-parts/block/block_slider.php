<?php
/*
Block Name: Slider Block
Block Description: Lenders and insurers
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/
$sectionclass = 'image_slider';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 


/* --------------------------------------------------------------------------- */
include('______partials_global.php');

$content_text = ! empty( get_field('content_text') ) ? get_field('content_text') : 'Please Enter Content ';

$select_slider_type = ! empty( get_field('select_slider_type') ) ? get_field('select_slider_type') : '';

if ($select_slider_type === 'Lender') {
	$loop = 'lenders_repeater';
} else {
	$loop = 'insurers_repeater';
}

$sliderreturn = '';
if( get_field($loop,'options') ):
while( the_repeater_field($loop,'options') ):
	
	if( !empty($imagefield = get_sub_field('image_logo')) ) {
		$imageurl=$imagealt=$imageclass = '';
		$imageurl = ! empty($imagefield['url'] ) ? $imagefield['url'] : get_field('default_holding_image','options');
		$imagealt = ! empty( $imagefield['alt'] ) ? ' alt="'.$imagefield['alt'].'"' : '';
		$image = '<div><img src="'.$imageurl.'"'.$imagealt.' width="199px" height="150px"/></div>';
	} else  { 
		$image = '<div><img src="'.get_field('default_holding_image','options').'" alt="Holding Image" class="'.$glob_imageclass.'"/></div>';
	};
	
	
			$sliderreturn .= $image;
		
		
endwhile; 
endif;

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="intro">'.$content_text.'</div>
	<div id="'.$loop.'">'.$sliderreturn.'</div> 
</section>';
?>
