<?php	
if(!defined('DIR_ACCESS'))	
	die('Access Denied!');
	
	get_base_head('home');	
?>

<body class="cart-empty">

	<?php get_the_header();?>

	<div class="container" style="padding-bottom:200px;">
					
		<div class="canvas-wrapper">
		
			<div>
			
				<h1>Refund Policy<br></h1>
				
				<h2>Refund Policy</h2>
				
				<p>Because the website has implemented the Instant Payment Notification (IPN) system, which allows the service to be processed immediately after paying the processing fee, we operate a <strong>NO REFUND policy.</strong> The cost of the eTA application is non-refundable and should a duplicate Canadian eTA either exist or is found for the traveller(s), we are not able to issue a refund.</p>
				
				<p>We do take exceptional circumstances into consideration should something happen that is outside of your control and will consider refunds on a case-by-case basis. Please email us at <strong>support@etavisa-gov.ca</strong>.</p>
			
			</div>
		
		</div>
		
	</div>
	
	<?php get_the_footer(); ?>