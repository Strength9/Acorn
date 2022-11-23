<?php
/*
Block Name: Centered Text With Background Image
Block Description: center aligned text
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/
$sectionclass = 'cblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');
$content_text = ! empty( get_field('content_text') ) ? get_field('content_text') : 'Please Enter Content ';

if( !empty($imagefield = get_field('image_file')) ) {
	$imageurl=$imagealt=$imageclass = '';
	$imageurl = ! empty($imagefield['url'] ) ? $imagefield['url'] : '';
	$imagealt = ! empty( $imagefield['alt'] ) ? ' alt="'.$imagefield['alt'].'"' : '';
	$imagestarterfile = '<img src="'.$imageurl.'"'.$imagealt.'/>';
} else  { 
	$imagestarterfile = '';
};

if( !empty($imagefield = get_field('image_file_last')) ) {
	$imageurl=$imagealt=$imageclass = '';
	$imageurl = ! empty($imagefield['url'] ) ? $imagefield['url'] : '';
	$imagealt = ! empty( $imagefield['alt'] ) ? ' alt="'.$imagefield['alt'].'"' : '';
	$imagelastfile = '<img src="'.$imageurl.'"'.$imagealt.'/>';
} else  { 
	$imagelastfile = '';
};






$background_image = ! empty(get_field('background_image') ) ? ' style="background-image:url('.get_field('background_image').');" ' : '';


echo '<section '.$anchor.' class="'.$blockclass .'" '.$background_image.'>
	<div class="wcp-columns">
		 <div class="wcp-column full">'.$imagestarterfile.$content_text.$imagelastfile.'</div>
	</div>
</section>';
?>
