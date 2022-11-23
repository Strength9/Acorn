<?php
/*
Block Name: Call to Action
Block Description: Template Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/

/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */

$background_colour = ! empty( get_field('background_colour') ) ? ' '.get_field('background_colour') : ' white';
$sectionclass = 'ctoa'.$background_colour;
include('______partials_global.php');





if( !empty($imagefield = get_field('image_file')) ) {
	$imageurl=$imagealt=$imageclass = '';
	$imageurl = ! empty($imagefield['url'] ) ? $imagefield['url'] : '';
	$imagealt = ! empty( $imagefield['alt'] ) ? ' alt="'.$imagefield['alt'].'"' : '';
	$imagefile = '<img src="'.$imageurl.'"'.$imagealt.'/>';
} else  { 
	$imagefile = '';
};

$content_text = ! empty( get_field('content_text') ) ? get_field('content_text') : '';



// Creates a Link from a ACF field array

if( !empty($linkfield = get_field('link_text')) ) {
	$linkurl=$linktitle=$linkdisplaytitle=$linktarget=$link= '';
	$linkurl = ! empty( $linkfield['url'] ) ? $linkfield['url'] : '#';
	$linktitle = ! empty( $linkfield['title'] ) ? ' title="'.$linkfield['title'].'"' : '';
	$linkdisplaytitle = ! empty( $linkfield['title'] ) ? $linkfield['title'] : 'Find out more';
	$linktarget = ! empty( $linkfield['target'] ) ? ' target="'.$linkfield['target'].'"' : '';
	$link_text = '<a href="'.$linkurl.'"'.$linktitle.$linktarget.$linkclass.'>'.$linkdisplaytitle .'</a>';
} else  {
	$link_text = '';
};


/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">'.$imagefile.$content_text.$link_text.'</section>';
?>
