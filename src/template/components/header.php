<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly ?>

<?php
/*

	fields

*/
$logo 		= get_field( 'logo' );
$commerce = get_field( 'commerce_type', false ,false );
$slogan 	= get_field( 'slogan', false, false );
$bg_img 	= get_field( 'bg_img' );
$phone 		= get_field( 'phone' );
$email 		= get_field( 'email' );
$facebook = get_field( 'facebook' );

if ( !empty( $bg_img ) ) {
	$bg = 'Style="background-image: url('.$bg_img['sizes']['large'].'); "';
} ?>

<header class="d-flex" <?php echo $bg; ?>>
	<div class="bg-color"></div>
	<div class="container d-flex flex-column justify-content-center text-center">	
		<ul class="fixed">
		<?php if ( !empty( $facebook ) ) : ?>
			<li class="d-inline-block"><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<?php endif; ?>
		<?php if ( !empty( $email ) ) : ?>
			<li class="d-inline-block"><a href="mailto: <?php echo $email; ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
		<?php endif; ?>
		<?php if ( !empty( $phone ) ) : ?>
			<li class="d-inline-block"><a href="tel: <?php echo $phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
		<?php endif; ?>
		</ul>
		<h1 class="text-hide">
			<img src="<?php echo $logo['sizes']['large'] ?>">
			<p><?php bloginfo( 'name' ); ?></p>
		</h1>
		<h2><?php echo $slogan; ?></h2>
		<p><?php echo $commerce; ?></p>
	</div>
</header>