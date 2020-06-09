<?php 
/*
Template Name: gallery
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
  
  <section class="gallery-page section-gap">
  	<div class="container">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Photos <?php
        $args = array(
            'post_type' => 'photos',
            'post_status' => 'publish',
        );
        $photos = new WP_Query($args);
    ?> <?php if(have_posts()):while($photos->have_posts()): $photos->the_post();?><?php if ( is_post_type_archive() ){
                post_type_archive_title();
              } ?><?php endwhile; endif; ?></a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo 'videos'; ?></a>
        </div>
      </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <?php   
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $original_query = $wp_query;
          $wp_query = null;
          $args=array('posts_per_page'=>2, 'post_type' => 'photos', 'paged'=>$paged);
          $wp_query = new WP_Query( $args );
          if($wp_query->have_posts()):?>
        <div class="row">
          <div class="col-md-12">
  		      <div class="gallery-title">
              <h2>
              <?php if ( is_post_type_archive() ){
                post_type_archive_title();
              } ?>
              </h2>
    		    </div>
          </div>
        </div>
        <div class="row">
          <?php while($wp_query->have_posts()): $wp_query->the_post();?>
    		      <div class="col-lg-4 col-md-6">
                <div class="gallery-img">
    				      <img src="<?php echo get_the_post_thumbnail_url();?>">
                </div>
    		      </div>
          <?php endwhile; ?>
          <div class="pagination"><?php pagination(); ?></div>
        </div>
        <?php endif; wp_reset_postdata(); ?>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <?php   
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $original_query = $videos;
          $wp_query = null;
          $args=array('posts_per_page'=>2, 'post_type' => 'videos', 'paged'=>$paged);
          $wp_query = new WP_Query( $args );
          if($wp_query->have_posts()):?>
        <div class="row">
    		  <div class="col-md-12">
            <div class="gallery-title">
              <h2><?php if ( is_post_type_archive( ) ){
                post_type_archive_title();
              } ?></h2>
    		    </div>
    		  </div>
    		</div>
        <div class="row">
        <?php while($wp_query->have_posts()): $wp_query->the_post();?>
    		  <div class="col-lg-4 col-md-8">
            <div class="gallery-img">
    				  <?php the_content(); ?>
            </div>
    		  </div>
        <?php endwhile;?>
        <div class="pagination"><?php pagination(); ?></div>
        </div>
        <?php endif; wp_reset_postdata();?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

