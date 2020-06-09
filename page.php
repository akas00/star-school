<?php include("header.php"); ?>

<!-- Banner Section -->
	<section class="banner-section banner-height" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">

		<div class="banner-overlay"></div>
		<div class="container">
			<div class="banner-slogan">
				<h1 class="slogan"><?php the_title();?></h1>
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
						</div>
						<div class="right-heading">
							<h2><?php the_title();?></h2>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					 <div class="news-detail-content">
						<?php while(have_posts()): the_post();?>
							<p><?php the_content();?> </p>
						<?php endwhile;?>
					</div>
				</div>			
			</div>
		</div>
	</section>
<?php include("footer.php"); ?>