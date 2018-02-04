<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly ?>

<?php get_header(); ?>

<?php get_template_part( 'components/header' ); ?>

<div class="main">
	<div class="container">

	<?php get_template_part( 'components/hero_shot' ); ?>

	<hr class="m-0">

	<?php get_template_part( 'components/gallery' ); ?>

	<?php get_template_part( 'components/form' ); ?>
	
	</div>
</div>

<?php get_template_part( 'components/footer' ); ?>

<?php get_footer(); ?>