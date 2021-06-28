<?php 
    setlocale(LC_ALL, 'tr_TR');
	
	header('Content-Type: text/html; charset=utf-8');
	header("Content-Type: text/html; charset=utf-8");
	header("Expires: 0");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
    
    $request 		= $_SERVER['SERVER_NAME'];
    $header 		= $_SERVER['REQUEST_URI'];
    $directory		= $_SERVER['DOCUMENT_ROOT'];
   
    if (session_status() !== PHP_SESSION_ACTIVE) {
		
		session_start();
		
		ob_start();

			require_once $directory . '/class/construct/include.php';
			
			_include_all ($directory . '/class/');		
			_include_all ($directory . '/class/construct/');	
		
			$_SESSION ['language'] = _language();
		
			require_once $directory . '/settings.php';		
		
			?>	
			<!DOCTYPE html>
<html lang="en-US" data-menu="classicmenu">

	<?php include_once 'public/head.php' ?>

	
<body data-rsssl=1 class="home page-template-default page page-id-3244 woocommerce-no-js">

    <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="classicmenu" />
    <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="" />
    <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="" />
    <input type="hidden" id="pp_image_path" name="pp_image_path" value="https://themes.themegoods.com/grandrestaurant/demo6/wp-content/themes/grandrestaurant/images/" />
    <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="https://themes.themegoods.com/grandrestaurant/demo6" />
    <input type="hidden" id="pp_ajax_search" name="pp_ajax_search" value="1" />
    <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1" />
    <input type="hidden" id="pp_topbar" name="pp_topbar" value="1" />
    <input type="hidden" id="post_client_column" name="post_client_column" value="4" />
    <input type="hidden" id="pp_back" name="pp_back" value="Back" />
    <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="1" />
    <input type="hidden" id="tg_project_filterable_link" name="tg_project_filterable_link" value="" />
    <input type="hidden" id="pp_reservation_start_time" name="pp_reservation_start_time" value="11:00" />
    <input type="hidden" id="pp_reservation_end_time" name="pp_reservation_end_time" value="21:00" />
    <input type="hidden" id="pp_reservation_time_step" name="pp_reservation_time_step" value="30" />
    <input type="hidden" id="pp_reservation_date_format" name="pp_reservation_date_format" value="mm/dd/yy" />


	<input type="hidden" id="pp_footer_style" name="pp_footer_style" value="4" />
	
	<?php include_once 'public/mobile-menu.php'; ?>
	<?php include_once 'public/header.php'; ?>
	
	
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg">
		
    <?php include_once 'public/reservation.php';?>



        <div class="ppb_wrapper  ">
            <?php 

                _switch_page();
                //include_once 'include/pages/hakkimizda.php'
				//include_once 'public/story-1.php';
				//include_once 'public/story-2.php';
				//include_once 'public/story-3.php';
			
			?>
        

		<?php
		
			//include_once 'public/story-4.php';
			//include_once 'public/story-5.php';
			//include_once 'public/story-6.php';
			//include_once 'public/story-7.php';
		
		?>

    </div>

		<?php include_once 'public/footer.php';?>

    </div>

    <div id="overlay_background"></div>

	<?php include_once 'public/script.php';?>
</body>
</html>
<?php							
		ob_end_flush();
		
	}

?>




