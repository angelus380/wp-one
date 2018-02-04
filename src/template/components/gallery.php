<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly ?>

<?php
/*

	fields

*/
$gallery = 'gallery_images'; ?>

<section class="pb-0">
<div class="row">
<?php
if ( have_rows( $gallery ) ) :
	while ( have_rows( $gallery ) ) : the_row();
		$gallery_img = get_sub_field( 'gallery_image' );
		$text_img = get_sub_field( 'img_text', false, false ); ?>

		<div class="col-12 col-lg-6 gallery">
			<div style="background-image: url('<?php echo $gallery_img['sizes']['large']; ?>');"></div>
			<p><?php echo $text_img; ?></p>
		</div>
	<?php
	endwhile;
endif; ?>
</div>
</section>