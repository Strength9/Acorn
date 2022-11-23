<?php

if ( is_front_page() ) :
	$ext = 'home';
	$headerfixed = ""; 
else :
	$ext = '';
	$headerfixed = "fixed"; 
endif;
if (has_post_thumbnail( $post->ID ) ) {
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
}

?>

<header>
<div class="navgrid <?php echo $ext.$headerfixed;?>">
				<div class="logolink">
				  <a href="https://acornmortgagesolutions.co.uk/" class="logoicon" title="Acorn Mortgage Soultions"> </a>
				</div>
				
					<?php wp_nav_menu( array(  'menu' => 'Main Nav','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => '<nav>
					<input type="checkbox" id="drop" />
					<ul itemscope itemtype="http://www.schema.org/SiteNavigationElement">%3$s<li class="mobileonly"><a href="https://report.letsburrow.com/acornmortgagesolutions/apply-online/" target="_new" title="Get In Touch">Check my affordability</a></li>
							<li><label for="drop" class="toggle"><i class="fa-light fa-bars"></i><i class="fa-light fa-xmark"></i></label></li>
					</ul></nav>' ) );?>

				<div class="contact">
				  <a href="https://report.letsburrow.com/acornmortgagesolutions/apply-online/" target="_new" title="Get In Touch">Check my affordability</a>
				</div>
		</div>
</header>