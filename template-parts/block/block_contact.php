<?php
/*
Block Name: Contact Block
Block Description:Contact Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/

$sectionclass = 'getintouch';

/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */

// [wpforms id="670"]
$telephone_number = ! empty( get_field('telephone_number','options') ) ? '<a href="tel:+44'.substr(get_field('telephone_number','options'),1).'" title="Call the Team">'.substr(get_field('telephone_number','options'), 0, 5).' '.substr(get_field('telephone_number','options'), 5).'</a>' : '';
$telephone_numbercr = ! empty( get_field('telephone_number','options') ) ? '<a href="tel:+44'.substr(get_field('telephone_number','options'),1).'" title="Call the Team">t: +44 (0)'.substr(get_field('telephone_number','options'), 1, 4).' '.substr(get_field('telephone_number','options'), 5).'</a>' : '';
$email_address = ! empty( get_field('email_address','options') ) ? '<a href="mailto:'.get_field('email_address','options').'" title="Email The Team">e: '.get_field('email_address','options').'</a>' : '';
/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="getintouch">

   <div class="contactgrid">
		<div class="contactform">'.
			do_shortcode( '[wpforms id="670"]' ).'
		</div>
		<div class="contactdata">
<p>'.$telephone_numbercr.'</p>
  <p>'.$email_address.'</p>
		</div>
		<div class="disclaimer">
			  <p>You voluntarily choose to provide personal details to us via this website. Personal information will be treated as confidential by us and held in accordance with GDPR May 2018 requirements. You agree that such personal information may be used to provide you with details of services and products in writing, by email or by telephone.</p>
			  
			  <p>By submitting this information you have given your agreement to receive verbal contact from us to discuss your mortgage requirements,</p>
		</div>
		<div class="contacttitle">
			  <h3>Mighty Oaks From Acorns Grow</h3>
			  <h1>Contact us<br>today to see<br class="break"> how mighty<br class="break"> we are.</h1>
			  <p>'.$telephone_numbercr.'</p>
			 <p>'.$email_address.'</p>
		</div>
	  </div>
</section>';
?>
