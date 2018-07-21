<?php	
if(!defined('DIR_ACCESS'))	
	die('Access Denied!');
	
	get_base_head();	
?>
<body class="cart-empty">
	
	<?php get_the_header();?>
	
	<div class="container">
				
		<h1>Thank you!</h1>
		
		<div id="mainContent">
		
			<p class="alert alert-success">Thanks for your eTA application. This is now being processed and you will receive your documentation within 24 hours.
				
				</br>
				
				</br> 
				
				<b>Please check your "Spam" folder. If you find our email there, select the confirmation message and click "Not Spam/Junk."</b> 
				
				</br> 
				
				<b>This will help future messages to get through.</b>
			</p>
			
		</div>
		
	</div>
	
	<?php get_the_footer(); ?>