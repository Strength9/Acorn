<?php
/*
Block Name: Page Header
Block Description:Page Header
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/

$sectionclass = 'homeintro'; 

/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */





$extraimage =$headwidth=$hout=$headtext=$contactlinksblock=$video_poster_file=$video_file=$videohtml ='';

if (get_field('small_or_large_header') === 'Small') {
	$headwidth=' thin';
} else {
	$headwidth=' large';
};

if (get_field('show_video') === 'yes' ) {
		$video_poster_file = ! empty( get_field('video_poster_file') ) ? get_field('video_poster_file') : '';
	$video_file = ! empty( get_field('video_file') ) ? get_field('video_file') : '';
	$videohtml = '<video controls autoplay poster="'.$video_poster_file.'"><source src="'.$video_file.'" type="video/mp4">Sorry, your browser doesn’t support embedded videos. </video>';

} else { $video_poster_file = $video_file = $videohtml =''; };
if (get_field('show_contact_fields') === 'yes' ) {
	$calendar = ! empty( get_field('calendar_link','options') ) ? '<li><a href="'.get_field('calendar_link','options').'" title="Book an Appointment"><i class="fa-regular fa-calendar-days"></i></a></li>' : '';
	$whatsapp_number = ! empty( get_field('whatsapp_number','options') ) ? '<li><a href="https://wa.me/'.substr(get_field('whatsapp_number','options'),1).'?text=I%20am%20interested%20in%20your%20services%20can%20we%20talk" title="WhatsApp the team"><i class="fa-brands fa-square-whatsapp"></i></a></li>' : '';
	$telephone_number = ! empty( get_field('telephone_number','options') ) ? '<li><a href="tel:+44'.substr(get_field('telephone_number','options'),1).'" title="Call the Team"><i class="fa-solid fa-phone-office"></i></a></li>' : '';
	$email_address = ! empty( get_field('email_address','options') ) ? '<li><a href="mailto:'.get_field('email_address','options').'" title="Email The Team"><i class="fa-solid fa-envelope"></i></a></li>' : '';
	
	$contactlinksblock = '<ul class="contactheaders">
		<li>Get in touch today</li>'.$whatsapp_number.$email_address.$telephone_number.$calendar.'
	  </ul>';	
	  
} else { $contactlinksblock = ''; };
if (get_field('single_header_text') === 'yes' ) {
	$single_head_first_line = ! empty( get_field('single_head_first_line') ) ? '<h1><span>'.get_field('single_head_first_line').'</span>' : '<h1><span>Line 1</span>';
	$single_head_second_line = ! empty( get_field('single_head_second_line') ) ? get_field('single_head_second_line').'</h1>' : 'Text Line 2</h1>';
	
	$headtext= '<div class="singlehead">'.$single_head_first_line.$single_head_second_line.'</div>';	

	
} else {
	
	$slider_1_line_1 = ! empty( get_field('slider_1_line_1') ) ? '<span>'.get_field('slider_1_line_1').'</span>' : '<span>Line 1</span>';	
	$slider_1_line_2 = ! empty( get_field('slider_1_line_2') ) ? get_field('slider_1_line_2') : 'Line 2';
	
	$slider_2_line_1 = ! empty( get_field('slider_2_line_1') ) ? '<span>'.get_field('slider_2_line_1').'</span>' : '<span>Line 1</span>';	
	$slider_2_line_2 = ! empty( get_field('slider_2_line_2') ) ? get_field('slider_2_line_2') : 'Line 2';
	
	$slider_3_line_1 = ! empty( get_field('slider_3_line_1')) ? '<span>'.get_field('slider_3_line_1').'</span>' : '<span>Line 1</span>';	
	$slider_3_line_2 = ! empty( get_field('slider_3_line_2') ) ? get_field('slider_3_line_2') : 'Line 2';
	
	$slider_4_line_1 = ! empty( get_field('slider_4_line_1') ) ? '<span>'.get_field('slider_4_line_1').'</span>' : '<span>Line 1</span>';	
	$slider_4_line_2 = ! empty( get_field('slider_4_line_2') ) ? get_field('slider_4_line_2') : 'Line 2';
	
	$headtext = '<div class="slider"><div class="slidertext"><div class="slide"><span>'.$slider_1_line_1.'</span>'.$slider_1_line_2 .'</div><div class="slide"><span>'.$slider_2_line_1.'</span>'.$slider_2_line_2 .'</div><div class="slide"><span>'.$slider_3_line_1.'</span>'.$slider_3_line_2 .'</div><div class="slide"><span>'.$slider_4_line_1.'</span>'.$slider_4_line_2 .'</div></div></div> ';
	
};


$reviewcode = '<div class="review">'.do_shortcode('[trustindex no-registration=google]').'</div>';
if (get_field('show_video') === 'yes' ) {
	$hout = '<div class="herodouble"><div class="highlights">'.$headtext.$reviewcode.' </div><div class="videodisp"><div class="vd">'.$videohtml.$contactlinksblock.'</div></div></div>';

} else {
	$hout = '<div class="herosingle"><div class="highlights">'.$headtext.$reviewcode .$contactlinksblock.'</div></div>';
};


if (get_field('show_featured_background') === 'yes' ) {

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 

$extraimage = 'style="background-image: url('.$image[0].')" background-size:cover;'; 

};






/*

--------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="herobanner'.$headwidth.'" '.$extraimage.'>
	'.$hout.'
</section>';
?>
