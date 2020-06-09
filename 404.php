<?php get_header();?>
	<!-- Banner Section -->
	<section class="banner-section banner-height" style="background-image: url('<?php echo get_theme_mod('banner_image');?>');">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-slogan">
				<h1 class="slogan">Error</h1>
			</div>
		</div>
	</section>

	<section class="error-page">
		<div class="container ">  
			<div class="heading-404">
				<h2>404<br>Error</h2>
				<h4>Page not found</h4>
				<p>Sorry, it appears the page you were looking for doesn’t exist anymore<br>or might have been moved</p>
				<div class="goto">
					<a href="<?php the_permalink(72);?>" class="button"> Go to homepage</a>
				</div>		
			</div>
		</div>
	</section>
<?php get_footer();?>


