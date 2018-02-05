<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly ?>

<?php
/*

	fields

*/
$title 			 = get_field( 'about_title' );
$text_area 	 = get_field( 'about_text' );
$section_img = get_field( 'about_img' ); ?>

<section class="hero">
	<div class="row">
		<div class="col-12 d-lg-none text-center">
			<h2><?php echo $title; ?></h2>
		</div>
		<?php if ( !empty( $section_img ) ) : ?>
			<div class="col-12 col-lg-6">
				<img src="<?php echo $section_img['sizes']['large']; ?>">
			</div>
		<?php endif; ?>

		<div class="col-12 col-lg-6">
			<h2 class="d-none d-lg-block"><?php echo $title; ?></h2>
			<p><?php echo $text_area; ?></p>
		</div>
	</div>
</section>