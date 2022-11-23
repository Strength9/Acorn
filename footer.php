<?php
$the_legal_bits = ! empty( get_field('the_legal_bits','options') ) ? '<div class="legaldisclaimer">'.get_field('the_legal_bits','options').'</div>' : '';
$calltoactiontext = ! empty( get_field('text','options') ) ? get_field('text','options') : '';
if( !empty($linkfield = get_field('call_to_action_link','options')) ) {
	$linkurl=$linktitle=$linkdisplaytitle=$linktarget=$link= '';
	$linkurl = ! empty( $linkfield['url'] ) ? $linkfield['url'] : '#';
	$linktitle = ! empty( $linkfield['title'] ) ? ' title="'.$linkfield['title'].'"' : '';
	$linkdisplaytitle = ! empty( $linkfield['title'] ) ? $linkfield['title'] : 'Find out more';
	$linktarget = ! empty( $linkfield['target'] ) ? ' target="'.$linkfield['target'].'"' : '';
	$calltoactionlinks = '<section class="ctoa green">'.$calltoactiontext.'<a href="'.$linkurl.'"'.$linktitle.$linktarget.'>'.$linkdisplaytitle .'</a></section>';
} else  {$calltoactionlinks = '';};

$telephone_number = ! empty( get_field('telephone_number','options') ) ? '<a href="tel:+44'.substr(get_field('telephone_number','options'),1).'" title="Call the Team">'.substr(get_field('telephone_number','options'), 0, 5).' '.substr(get_field('telephone_number','options'), 5).'</a>' : '';
$telephone_numbercr = ! empty( get_field('telephone_number','options') ) ? '<a href="tel:+44'.substr(get_field('telephone_number','options'),1).'" title="Call the Team">t: +44 (0)'.substr(get_field('telephone_number','options'), 1, 4).' '.substr(get_field('telephone_number','options'), 5).'</a>' : '';
$email_address = ! empty( get_field('email_address','options') ) ? '<a href="mailto:'.get_field('email_address','options').'" title="Email The Team">e: '.get_field('email_address','options').'</a>' : '';

$face = ! empty( get_field('facebook_link','options') ) ? '<li><a href="'.get_field('facebook_link','options').'" rel="noopener" title="Find Us on Facebook" target="_blank"><span>Find Us on Facebook</span><i class="fab fa-facebook-square"></i></a></li>' : '';
$twit = ! empty( get_field('twitter_link','options') ) ? '<li><a href="'.get_field('twitter_link','options').'" rel="noopener" title="Follow us on Twitter" target="_blank"><span>Follow us on Twitter</span><i class="fab fa-twitter-square"></i></a></li>' : '';
$insta = ! empty( get_field('instagram_link','options') ) ? '<li><a href="'.get_field('instagram_link','options').'" rel="noopener" title="Catch us on Insta" target="_blank"><span>Catch us on Insta</span><i class="fab fa-instagram-square"></i></a></li>' : '';
$linkedin = ! empty( get_field('linkedin_link','options') ) ? '<li><a href="'.get_field('linkedin_link','options').'" rel="noopener" title="Find Us on LinkedIn" target="_new"><span>Find Us on LinkedIn</span><i class="fab fa-linkedin"></i></a></li>' : '';
$social ='<ul>'.$face.$twit.$insta.$linkedin.'</ul>';

?>
<footer>
	<?php echo $the_legal_bits;?>
	<?php echo $calltoactionlinks;?>

	<div class="menucontainer">
			<div class="branding">
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/svg/acorn_logo_footer.svg" alt="Acorn Mortgage Solutions">
				<p><?php echo $telephone_number;?></p>
			</div>
			<?php wp_nav_menu( array(  'menu' => 'MortServices','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 1 , 'items_wrap' => '<div class="menu1"><ul>%3$s</ul></div>' ) );?>
			<?php wp_nav_menu( array(  'menu' => 'ProtServices','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 1 , 'items_wrap' => '<div class="menu2"><ul>%3$s</ul></div>' ) );?>
			<?php wp_nav_menu( array(  'menu' => 'Legal','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 1 , 'items_wrap' => '<div class="menu3"><ul>%3$s</ul></div>' ) );?>
	</div>
	<div class="copyrightbar">
		<div class="container">
			<div class="copybar">
				<ul>
					<li><?php echo $telephone_numbercr;?></li>
					<li><?php echo $email_address;?></li>
				</ul>
			</div>
			<div class="socials">
				<?php echo $social;?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>