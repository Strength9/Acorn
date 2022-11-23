<?php
/*
Block Name: Double Image Link
Block Description: Template Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/
$sectionclass = 'halfandhalf';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');
$content_text = ! empty( get_field('content_text') ) ? get_field('content_text') : '';


if( !empty($imagefield = get_field('image_1')) ) {
	$imageurl=$imagealt= '';
	$imageurl = ! empty($imagefield['url'] ) ? $imagefield['url'] : get_field('default_holding_image','options');
	$imagealt = ! empty( $imagefield['alt'] ) ? ' alt="'.$imagefield['alt'].'"' : '';
	$image1 = '<img src="'.$imageurl.'"'.$imagealt.'/>';
} else  { 
	$image1 = '<img src="'.get_field('default_holding_image','options').'" alt="Holding Image" class="'.$glob_imageclass.'"/>';
};

if( !empty($imagefield = get_field('image_2')) ) {
	$imageurl=$imagealt= '';
	$imageurl = ! empty($imagefield['url'] ) ? $imagefield['url'] : get_field('default_holding_image','options');
	$imagealt = ! empty( $imagefield['alt'] ) ? ' alt="'.$imagefield['alt'].'"' : '';
	$image2 = '<img src="'.$imageurl.'"'.$imagealt.'/>';
} else  { 
	$image2 = '<img src="'.get_field('default_holding_image','options').'" alt="Holding Image" class="'.$glob_imageclass.'"/>';
};


if( !empty($linkfield = get_field('image_link_1')) ) {
	$linkurl=$linktitle=$linkdisplaytitle=$linktarget=$link= '';
	$linkclass = ' class="button smallgreen" '; //
	$linkurl = ! empty( $linkfield['url'] ) ? $linkfield['url'] : '#';
	$linktitle = ! empty( $linkfield['title'] ) ? ' title="'.$linkfield['title'].'"' : '';
	$linkdisplaytitle = ! empty( $linkfield['title'] ) ? $linkfield['title'] : 'Find out more';
	$linktarget = ! empty( $linkfield['target'] ) ? ' target="'.$linkfield['target'].'"' : '';
	$link1 = '<a href="'.$linkurl.'"'.$linktitle.$linktarget.$linkclass.'>'.$linkdisplaytitle .'</a>';
} else  {
	$link1 = '';
};

if( !empty($linkfield = get_field('image_link_2')) ) {
	$linkurl=$linktitle=$linkdisplaytitle=$linktarget=$link= '';
	$linkclass = ' class="button smallgreen" '; //
	$linkurl = ! empty( $linkfield['url'] ) ? $linkfield['url'] : '#';
	$linktitle = ! empty( $linkfield['title'] ) ? ' title="'.$linkfield['title'].'"' : '';
	$linkdisplaytitle = ! empty( $linkfield['title'] ) ? $linkfield['title'] : 'Find out more';
	$linktarget = ! empty( $linkfield['target'] ) ? ' target="'.$linkfield['target'].'"' : '';
	$link2 = '<a href="'.$linkurl.'"'.$linktitle.$linktarget.$linkclass.'>'.$linkdisplaytitle .'</a>';
} else  {
	$link2 = '';
};


/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">
		<div class="introdiv larger">'.$content_text.'</div>
		  <div class="splitgrid">
			  <div>
					'.$image1.$link1.'
				</div>
				<div>
				   '.$image2.$link2.'
			   </div>
		  </div>
		  
</section>';
?>