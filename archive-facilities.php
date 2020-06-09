<?php get_header();?>
<!-- Banner Section -->
	<section class="banner-section banner-height" style="background-image: url('<?php echo get_the_post_thumbnail_url(166);?>');">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-slogan">
				<h1 class="slogan"><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></h1>
			</div>
		</div>
	</section>

	<section class="events ">
		<div class="container">
			<div class="headings">
				<div class="left-heading">
					<h2><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></h2>
				</div>
				<div class="right-heading">
					<h2><?php echo get_theme_mod('facilities-sub-heading'); ?></h2>
				</div>
			</div>
			<div class="row">
				<?php while(have_posts()): the_post();?>
					<div class="col-lg-4 col-md-6">
						<div class="events-image">
							<a href="<?php the_permalink();?>">
							<img src="<?php echo get_the_post_thumbnail_url();?>">
							<div class="events-overlay "></div>
							</a>
						</div>
						<div class="events-details">
							<div class="details">
								<p><?php the_title();?></p>
							</div>
						</div>
					</div>
				<?php endwhile;?>
			</div>
		</div>
	</section>
<?php get_footer();?>