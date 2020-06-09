<?php 
/*
Template Name: contact us
*/
get_header(); ?>
<!-- Banner Section -->
	<section class="banner-section banner-height" style="background-image: url('<?php the_post_thumbnail_url();?>');">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-slogan">
				<h1 class="slogan"><?php the_title();?></h1>
			</div>
		</div>
	</section>
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="headings">
						<div class="right-heading">
							<h2><?php the_field('page_heading');?></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-6 contact-form">
					<div class="contact-form-title">
						<h3><?php the_field('form_heading');?></h3>
					</div>
					<?php echo do_shortcode( '[contact-form-7 id="95" title="Contact page form"]' );?>		
				</div>
				<div class="col-md-6 contact-map">
					<?php the_field('googlemap');?>                
	            </div>
			</div>
		</div>
	</section>
<?php get_footer();?>