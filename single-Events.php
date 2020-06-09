<?php get_header(); ?>
 <!-- Banner Section -->
	<section class="banner-section banner-height" style="background-image: url('<?php echo get_the_post_thumbnail_url(34);?>');">
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
				<div class="col-md-12">
					<div class="headings">
						<div class="right-heading">
							<h2><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></h2>
						</div>
					</div>
				</div>
			</div>
			<?php while(have_posts()): the_post();?>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="main-contents">
							<div class="single-event-img">
								<img src="<?php echo get_the_post_thumbnail_url();?>">
							</div>
						</div>
						<div class="main-contents-title">
							<h3><?php the_title();?></h3>
							<p class="date"><?php the_date();?></p>
							<p><?php the_content();?></p>
						</div>
						<div class="highlight-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur.
							</p>
						</div>
						<div class="content-details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. </p>
						</div>
					</div>
					<div class="col-md-12">
			            <div class="pag">
			                <div class="previous">
			                 	<h6>Previous</h6>
			                    <?php previous_post_link('
			                        <p>%link</p>
			                        ', '%title', false);
			                    ?>
			                </div>
			                <div class="next">  
			                	<h6>Next</h6> 
			                    <?php next_post_link('
			                        <p>%link</p>
			                        ', '%title', false);
			                    ?>
			                </div>
			            </div>
			        </div>			
				</div>
			<?php endwhile;?>	
		</div>
	</section> 
<?php get_footer(); ?>