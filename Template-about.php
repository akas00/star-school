<?php 
/*
Template Name: About
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

	<section class="about-page ">
		<div class="container">
			<div class="headings">
				<div class="left-heading">
					<h2><?php the_field('sub_heading');?></h2>
					<p><?php while(have_posts()): the_post(); the_content(); endwhile;?></p>

				</div>
				<div class="right-heading">
					<h2><?php the_title();?></h2>
					<div class="about-image">
						<img src="<?php the_field('featured_image');?>">
					</div>
				</div>
			</div>
		</div>	
	</section>

	<section class="about-us section-gap"  style="background-image: url('<?php the_field('lower_banner_image');?>'); ">
		<div class="container">
				<div class="circle">
					<div class="text">
						<p><?php the_field('lower_banner_text1_line1');?> <br><?php the_field('lower_banner_text1_line2');?></p>
					</div>
				</div>
				<div class="circle">
					<div class="text">
						<p><?php the_field('lower_banner_text2_line1');?> <br><?php the_field('lower_banner_text2_line2');?></p>
					</div>
				</div>
				<div class="circle">
					<div class="text">
						<p><?php the_field('lower_banner_text3_line1');?><br><?php the_field('lower_banner_text3_line2');?></p>
					</div>
				</div>		
		</div>
	</section>

	<section class="apply-letter" >
		<div class="container">
			<div class="apply-letter-text">
				<?php the_field('textforapplyform');?>
			</div>
			<div class="apply-button">
				<a href="apply.php" data-toggle="modal" data-target=".bd-example-modal-lg"  ><?php the_field('apply_button');?></a>
			</div>
			<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  	<div class="modal-dialog modal-lg">
			    	<div class="modal-content">
			     		<div class="apply-form">
				            <form class="form-horizontal" role="form">
				               <?php echo do_shortcode( '[contact-form-7 id="164" title="popup form"]' ); ?>
				            </form> 
  				  		</div>
  			 	 	</div>
        	 	</div> 
     		</div>
	 	</div> 
	</section>
<?php get_footer();?>