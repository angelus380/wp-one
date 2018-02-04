<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly ?>

<?php
/*

	fields

*/
$address 		 = get_field( 'address' );
$name 			 = get_field( 'name' );
$phone 			 = get_field( 'phone' );
$skype 			 = get_field( 'skype' );
$email 			 = get_field( 'email' );
$facebook 	 = get_field( 'facebook' ); ?>

<footer>
	<div class="container text-center">
		<div>
			<p><?php echo $address; ?></p>
		</div>

		<div>
			<p><?php echo $name; ?></p>
			<a href="tel: <?php echo $phone; ?>"><?php echo $phone; ?></a>
			<p><?php echo $skype; ?></p>
			<a href="mailto: <?php echo $email; ?>"><?php echo $email; ?></a>
		</div>
	</div>
</footer>