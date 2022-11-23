<?php
/*
Block Name: Key Steps
Block Description: Stagered Steps
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/
$sectionclass = 'steps';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 

include('______partials_global.php');
$content_text = ! empty( get_field('content_text') ) ? '<div class="introduction">'.get_field('content_text').'</div>' : '';

$select_number_of_steps = ! empty( get_field('select_number_of_steps') ) ? get_field('select_number_of_steps') : 1;
$step_1 = ! empty( get_field('step_1') ) ? '<li class="st_1">'.get_field('step_1').'</li>' : '';
$step_2 = ! empty( get_field('step_2') ) ? '<li class="st_2">'.get_field('step_2').'</li>' : '';
$step_3 = ! empty( get_field('step_3') ) ? '<li class="st_3">'.get_field('step_3').'</li>' : '';
$step_4 = ! empty( get_field('step_4') ) ? '<li class="st_4">'.get_field('step_4').'</li>' : '';
$step_5 = ! empty( get_field('step_5') ) ? '<li class="st_5">'.get_field('step_5').'</li>' : '';

$step_1_image = ! empty( get_field('step_1_image') ) ? '<li class="si_1"><img src="'.get_field('step_1_image').'"/></li>' : '';
$step_2_image = ! empty( get_field('step_2_image') ) ? '<li class="si_2"><img src="'.get_field('step_2_image').'"/></li>' : '';
$step_3_image = ! empty( get_field('step_3_image') ) ? '<li class="si_3"><img src="'.get_field('step_3_image').'"/></li>' : '';
$step_4_image = ! empty( get_field('step_4_image') ) ? '<li class="si_4"><img src="'.get_field('step_4_image').'"/></li>' : '';
$step_5_image = ! empty( get_field('step_5_image') ) ? '<li class="si_5"><img src="'.get_field('step_5_image').'"/></li>' : '';





/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">'.$content_text.'
				<ul class="steps">'.$step_1_image.$step_2_image.$step_3_image.$step_4_image.$step_5_image.$step_1.$step_2.$step_3.$step_4.$step_5.'
				</ul>
		</div>
	</div>
	
</section>';
?>
