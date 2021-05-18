<!DOCTYPE html>
<html>

	<?php include_once $directory . '/public/head.php'; ?>
	
	<body>
		
		<?php //include_once $directory . '/public/loader.php'; ?>

		<div id="wrapper">

			<?php 
			
				include_once $directory . '/public/header.php';
			
				_switch_page ();
						
				include_once $directory . '/public/footer.php';
			
			?>

			<span id="back-top" class="fa fa-arrow-up"></span>
			
		</div>

		<?php include_once $directory . '/public/script.php'; ?>
		
	</body>
</html>

