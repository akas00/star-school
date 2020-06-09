<?php get_header(); ?>
<!-- Banner Section -->
	<section class="banner-section banner-height" style="background-image: url('<?php echo get_the_post_thumbnail_url(34);?>');">
		<div class="banner-overlay"></div>
			<div class="container">
				<div class="banner-slogan">
					<h1 class="slogan"><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></span></h1>
				</div>
			</div>
		</div>
	</section>

	<section class="events ">
		<div class="container">
			<div class="headings">
				<div class="left-heading">
					<h2><?php echo get_theme_mod('events-sub-heading'); ?></h2>
				</div>
				<div class="right-heading">
					<h2><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></h2>
				</div>
			</div>
			<div class="row">
				<?php while(have_posts()): the_post();?>
					<div class="col-md-4">
						<div class="events-image">
							<a href="<?php the_permalink();?>">
							<img src="<?php echo get_the_post_thumbnail_url();?>">
							<div class="events-overlay "></div>
							</a>
						</div>
						<div class="events-details">
							<div class="shapes">
								<div class="rectangle">
									<p><?php echo get_the_date('M');?></p>
								</div>
								<div class="shape">
									<p><?php echo get_the_date('j');?></p>
								</div>
							</div>
							<div class="details">
								<p><?php the_title();?></p>
							</div>
						</div>
					</div>
				<?php endwhile;   ?>
				
					
			</div>	
			<div class="row">
			<div class="col-md-12">
				<div class="pagination"><?php pagination(); ?></div>
				</div></div>
			
		</div>
	</section>
<?php get_footer();?>