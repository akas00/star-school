<?php get_header(); ?>
<!-- Banner Section -->
	<section class="banner-section banner-height" style="background-image: url('<?php echo get_the_post_thumbnail_url(36);?>');">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-slogan">
				<h1 class="slogan"><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></h1>
			</div>
		</div>
	</section>

	<section class="news-section  ">
		<div class="container ">
			<div class="headings">
				<div class="left-heading">
					<h2><?php echo get_theme_mod('news-sub-heading'); ?></h2>
				</div>
				<div class="right-heading">
					<h2><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></h2>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row ">
				<?php while(have_posts()): the_post();?>
					<div class="col-lg-4 col-md-8 news-container">
						<div class="news-content">
							<div class="date">
							<p><?php echo get_the_date();?></p>
						</div>
						<div class="description-title">
							<h4><?php the_title();?></h4>
						</div>
						<div class="description">
							<p> <?php the_excerpt();?></p>
						</div>
						<a href="<?php the_permalink();?>" class="btn">Read More</a>
						</div>  
					</div>
				<?php endwhile; ?>
					
			</div>
			<div class="pagination"><?php pagination(); ?></div>
		</div>
	</section>
<?php get_footer();?>