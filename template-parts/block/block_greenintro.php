<?php
/*
Block Name: Green Introduction
Block Description: Centralised introduction Set
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/
$sectionclass = 'giblock';
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
	$imagefile = '<img src="'.$imageurl.'"'.$imagealt.'/>';
} else  { 
	$imagefile = '';
};

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">
		 	'.$imagefile.$content_text.'
		</div>
	</div>
</section>';
?>
