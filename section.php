<!DOCTYPE html>

<html>
		
	<?php include_once $directory . '/public/head.php'; ?>
		
		<body>
			
			<?php include_once $directory . '/public/header.php'; ?>

			<main class="cd-main-content">
				
				<?php 
				
					if(!isset( $_GET['page'])) {$page = 'default';} else {$page = $_GET['page'];}

					switch($page) {

						case 'default';

							include_once $directory . '/include/landing-page.php'; 
							
						break;	
							
						case 'menu';

							include_once $directory . '/include/menu.php'; 

						break;	
							
						case 'osmanli-donem-mutfaklari';

							include_once $directory . '/include/landing-page.php'; 

						break;								
							
						case 'kosk';

							include_once $directory . '/include/landing-page.php'; 

						break;		
							
						case 'sifa';
						
							include_once $directory . '/include/landing-page.php'; 
				
						break;								
					}				
				include_once $directory . '/public/footer.php'; 
				?>
			</main>

			<div class="scroll-to-top">&#xf106;</div>
		
		</body>
	
	<?php include_once $directory. '/public/script.php';?>		

</html>