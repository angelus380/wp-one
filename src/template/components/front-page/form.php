<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly ?>

<?php
/*

	fields

*/
$message 	= get_field( 'form_message' );
$btn_text = get_field( 'btn_text' );
$quote 		= get_field( 'quote' ); ?>

<section>
	<form class="d-flex flex-column col-12 col-md-8 col-lg-6 m-auto"
		action="https://formspree.io/miguel@uno.pt" method="POST" target="_blank">

		<h2 class="text-center"><?php echo $message; ?></h2>
		<label>email</label>
		<input type="email" name="email" required>
		<label>name</label>
		<input type="text" name="name" required>
		<label>message</label>
		<textarea type="text" name="message" required></textarea>
		<input class="send-input" type="submit" value="<?php echo $btn_text; ?>">
		<input type="text" name="_gotcha" style="display:none" />
	</form>

	<blockquote>
		<i><?php echo $quote; ?></i>
	</blockquote>
</section>