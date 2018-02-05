<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly ?>

<?php get_header(); ?>

<?php get_template_part( 'components/front-page/header' ); ?>

<div class="main">
	<div class="container">

	<?php get_template_part( 'components/front-page/about' ); ?>

	<hr class="m-0">

	<?php get_template_part( 'components/front-page/gallery' ); ?>

	<?php get_template_part( 'components/front-page/form' ); ?>
	
	</div>
</div>

<?php get_template_part( 'components/front-page/footer' ); ?>

<?php get_footer(); ?>