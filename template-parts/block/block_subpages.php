<?php
/*
Block Name: Sub Pages Grid
Block Description: Stagered Steps
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/
$sectionclass = 'cards';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 

include('______partials_global.php');
$content_text = ! empty( get_field('content_text') ) ? get_field('content_text') : 'Please Enter Content ';

$select_page = ! empty( get_field('select_page') ) ? get_field('select_page') : '0';

$order_by = ! empty( get_field('order_by') ) ? get_field('order_by'): 'menu_order';

$order_direction = ! empty( get_field('order_direction') ) ? get_field('order_direction') : 'ASC';
$display_number = ! empty( get_field('display_number') ) ? get_field('display_number') : 5;

$child_pages = get_posts(array(
		'post_type' => 'page',
		'orderby' => $order_by,
		'order' => $order_direction ,
		'post_parent' => $select_page,
		'posts_per_page' => $display_number
));


	$links = '';
	foreach ($child_pages as $child_page) {
	
		$linlk =  get_permalink($child_page->ID);
		$title = $child_page->post_title;
		$feat = wp_get_attachment_image_src( get_post_thumbnail_id($child_page->ID), 'single-post-thumbnail' );
		$page_introduction = ! empty( get_field('page_introduction',$child_page->ID) ) ? get_field('page_introduction',$child_page->ID) : '';
	
	
	$links .= '<a href="'.$linlk.'" title="'.$title.'" class="cardlink" style="background-image:url('.$feat[0].');">
			<div class="caption">
				<h3>'.$title.'</h3>
				<p>'.$page_introduction.'</p>
				<span>Discover More</span>
			</div>
			</a>';
	} ;
	
$content_text = ! empty( get_field('content_text') ) ? '<div class="introdiv">'.get_field('content_text').'</div>' : '';
/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">'.$content_text.'<div class="inner">'.$links.'</div></section>';
?>
