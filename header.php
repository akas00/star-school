<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('-', true, 'right'); bloginfo('name');?></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/e1cb2f6b47.js" crossorigin="anonymous">
	</script>
	<?php wp_head(); ?>
</head>

 

<body>
	<section class="site-header">
		<div class="container">
			<!-- site logo -->
			<div class="site-logo">
				<a href="<?php the_permalink(72);?>" title="">
					<img src="<?php echo get_theme_mod('school_logo');?>">
				</a>
			</div>
			<!-- mobile-device-icon -->
	        <div class="hamburger-menu">
	            <div id="one"></div>
	            <div id="two"></div>
	            <div id="three"></div>
	        </div>

        <!-- mobile-device-icon-end -->
            
            <!-- Primary Menu -->

            <div class="primary-menu">
				
				<?php
							wp_nav_menu(array(
								'theme_location' => 'primary',
								'walker'		=> '',								

							)); 
						?>
					</div>
				

			<div class="mobile-menu d-lg-none">
					<?php
							wp_nav_menu(array(
								'theme_location' => 'mobilemenu',
							)); 
						?>				
			</div>
			
		</div>
	</section>




	
