<?php get_header();?>
<section class="banner-section banner-height" style="background-image: url('<?php echo get_the_post_thumbnail_url(166);?>');">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-slogan">
				<h1 class="slogan"><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></h1>
			</div>
		</div>
	</section>

	<section class="single-event">
		<div class="container">
			<div class="row">
				<h2>This is the single page for the facilities page</h2>
			</div>
		</div>
	</section>
<?php get_footer();?>