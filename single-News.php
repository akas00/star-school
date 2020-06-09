<?php get_header();?>
<!-- Banner Section -->
	<section class="banner-section banner-height" style="background-image: url('<?php echo get_the_post_thumbnail_url(36);?>');">
		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-slogan">
				<h1 class="slogan"><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></h1>
			</div>
		</div>
	</section>

	<section class="news-details">
		<div class="container ">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-11">
					<div class="headings">
						<div class="left-heading">
							<h2><?php the_title();?></h2>
						</div>
						<div class="right-heading">
							<h2><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="news-date">
						<div class="date">
							<p><?php the_date();?></p>
						</div>
						<div class="social">
							<?php social_media(); ?>
						</div>
					</div> 
					<?php while(have_posts()): the_post();?>
						<div class="news-detail-content">
							<p><?php the_content();?> </p>
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
					<?php endwhile;?>
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
		</div>
	</section>
	<section class="news-details-form">
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
				 	<div class="comment-list">
				 		<p>No Commet</p>	
				 	</div>
				 	<div  class="form-horizontal" >
			 			<div class="row">
							<?php if ( comments_open() || get_comments_number() ) :
								    comments_template();
								endif;
							?>
						</div>
	           		</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer();?>