<?php
/*
Block Name: Mighty Acorn
Block Description: Stagered Steps
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: acorn
*/
$sectionclass = 'halfandhalf';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png">';
		return;
} 

include('______partials_global.php');
$content_text = ! empty( get_field('content_text') ) ? '<div class="introdiv">'.get_field('content_text').'</div>' : '';

$content_textlist = ! empty( get_field('content_textlist') ) ? get_field('content_textlist') : 'Please Enter Content ';

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">'.$content_text.'
 <div class="splitgrid smallpad">
	  <div>
			 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="25" height="32" viewBox="0 0 25 32" id="acornlogo_large">
			 <path fill="#f19103" d="M22.352 22.229v-8.662c-0.082-0.049-9.771-8.548-9.771-8.548s-9.69 8.499-9.771 8.548v8.662c0 2.317 1.256 4.42 2.904 6.068 2.251 2.251 5.318 3.702 6.868 3.702 1.533 0 4.6-1.451 6.868-3.702 1.646-1.664 2.903-3.751 2.903-6.068z"></path>
			 <path fill="#fff" d="M16.855 25.23c0 0.424-0.342 0.767-0.767 0.767h-6.998c-0.408 0-0.751-0.326-0.767-0.734v-11.892c0.016-0.408 0.359-0.734 0.767-0.734h6.998c0.424 0 0.767 0.342 0.767 0.767v11.826z"></path>
			 <path fill="#026734" d="M13.201 15.117c0.147 0.082 0.245 0.245 0.245 0.408v7.585c0 0.196-0.114 0.359-0.277 0.424l-2.936 1.566h5.709v-11.55h-5.709l2.969 1.566z"></path>
			 <path fill="#026734" d="M11.521 18.102v2.349l0.848-0.18v-1.941z"></path>
			 <path fill="#056734" d="M19.726 5.721c0.277-1.060 1.109-2.3 1.664-2.855 0.294-0.293 0.375-0.718 0.049-1.044-0.114-0.131-0.277-0.196-0.44-0.196l-2.528-0.326c-0.359-0.033-0.685 0.016-0.978 0.163-0.424 0.212-0.734 0.604-0.946 1.076-0.049 0.082-0.082 0.18-0.114 0.277l-2.692-2.364c-0.669-0.604-1.664-0.604-2.333 0l-11.174 9.852c-0.293 0.261-0.31 0.702-0.049 0.978l0.929 1.044c0.261 0.293 0.702 0.31 0.978 0.049l10-8.824c0.261-0.229 0.653-0.229 0.929 0l10 8.824c0.294 0.261 0.734 0.229 0.979-0.049l0.929-1.044c0.261-0.293 0.229-0.734-0.049-0.978l-5.155-4.584z"></path>
			 </svg>
	  </div>
	  <div>'.$content_textlist.'</div>
  </div>
  	</section>';
  ?>