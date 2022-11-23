<?php
/*
Block Name: Download Block
Block Description: Download Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/
$sectionclass = 'downloadblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

$uni =  random_str(6,'abcdefghijklmnopqrstuvwxyz');


$download_title = ! empty( get_field('download_title') ) ? get_field('download_title') : 'Title';
$download_text = ! empty( get_field('download_text') ) ? get_field('download_text') : 'Text';
$download_button_text = ! empty( get_field('download_button_text') ) ? get_field('download_button_text') : 'Button text';
$form_id = ! empty( get_field('form_id') ) ? get_field('form_id') : 'xxx';

if( !empty($imagefield = get_field('download_image')) ) {
	$imageurl = ! empty($imagefield['url'] ) ? $imagefield['url'] : get_field('default_holding_image','options');
	$imagealt = ! empty( $imagefield['alt'] ) ? ' alt="'.$download_text.'"' : '';
	$downloadimage = '<img src="'.$imageurl.'"'.$imagealt.'/>';
} else  { 
	$image = '<img src="'.get_field('default_holding_image','options').'" alt="Holding Image" class="'.$glob_imageclass.'"/>';
};
/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column">
						 	'.$downloadimage.'
			 			</div>
			<div class="wcp-column">
			 			<h3>'.$download_title.'</h3><p>'.$download_text.'</p>
			 			<a href="#" class="button orange" title="'.$download_title.'" id="'.$uni.'_modalaction">'.$download_button_text.'</a>
			 		
		   	</div>
		 </div>
	</div>
</section>
<div id="modalup" class="'.$uni.'_modal">
<div class="formholder">
<span><i class="close fa-light fa-xmark"></i></span>';
echo do_shortcode( '[wpforms id="454" description="true"]' );
echo '</div></div>

<script>
jQuery("#'.$uni.'_modalaction").click(function(e) {
	e.preventDefault();
	document.body.style.position = "fixed";
	document.body.style.top = `-${window.scrollY}px`;
	document.body.style.position = "";
	document.body.style.top = "";
	  jQuery(".'.$uni.'_modal").toggleClass( "active" );
  });
  jQuery("#modalup .formholder span").click(function() {
	const scrollY = document.body.style.top;
	document.body.style.position = "";
	document.body.style.top = "";
	window.scrollTo(0, parseInt(scrollY || "0") * -1);
	  jQuery("#modalup").removeClass( "active" );
  });
  </script>

';
?>
