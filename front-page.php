<?php get_header(); ?>

<!-- Banner Section -->
    <section class="banner-section" style="background-image: url('<?php echo get_theme_mod('banner_image');?>');">
        <div class="banner-overlay"></div>
        <div class="container">
            <div class="banner-slogan">
                <h1 class="slogan"><?php echo get_theme_mod('sloganline1');?> <br><?php echo get_theme_mod('sloganline2');?></h1>
            </div>
        </div>
    </section>
    <!-- End of Banner Section -->

    <!-- Notice Section -->
    <?php
        $args = array(
            'post_type' => 'notices',
            'post_status' => 'publish',
            'posts_per_page' => 4,
        );
        $notices = new WP_Query($args);
    ?>
    <section class="notice-section">
        <div class="container">
            <div class="notice">
                <div class="notice-title align-items-center">
                    <h2><?php echo get_theme_mod('noticeBoard'); ?></h2>
                </div>
                <div class="notices">
                    <ul >
                        <?php while ($notices->have_posts()) :
                            $notices->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><i class=" icon-square "></i><span><?php the_title(); ?></span>
                             </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Notice Section -->

    <!-- About Section -->
    <section class="about-section section-gap">
        <div class="container">
            <div class="title">
                <h2><?php echo get_theme_mod('aboutheading'); ?></h2>
            </div>
            <div class="about-content section-gap">
                <h2 class="content-title"><?php echo get_theme_mod('welcomeheading'); ?></h2>
                <p><?php echo get_theme_mod('welcomeparagraph1'); ?><br><br>
                    <?php echo get_theme_mod('welcomeparagraph2'); ?></p>
                    <a href="<?php the_permalink(32);?>" class="btn"><?php echo get_theme_mod('about-button'); ?></a>
            </div>
        </div>
    </section>
    <!-- End of about-section -->

    <!--  Section-choose-->
    <?php
        $args = array(
            'post_type' => 'facilities',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'order' => 'ASC',
        );
        $facilities = new WP_Query($args);
    ?>
    <section class="choose-section ">
        <div class="container choose-us">
            <div class="title section-gap">
                <h2><?php echo get_theme_mod('facilitiesheading'); ?></h2>
            </div>
            <div class="choose-content section-gap2">
                <h2 class="choose-title"><?php echo get_theme_mod('facilities-sub-heading'); ?></h2>
                <p><?php echo get_theme_mod('facilities-paragraph'); ?><br><br>
                    <a href="<?php echo get_post_type_archive_link('facilities'); ?>" class="btn"><?php echo get_theme_mod('facilities-button'); ?></a>
            </div>   
        </div>
        <div class="container">
            <div class="row choose-wrapper">
                <?php while ($facilities->have_posts()) : $facilities->the_post(); ?>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php the_permalink();?>" title="">
                            <div class="choose-facilities">
                                <?php 
                                    if(get_the_ID() === 125){ ?>
                                        <i class=""></i>
                                    <?php } else if(get_the_ID() === 126){ ?>
                                         <i class="icon-noun_Bus-Stop_2265991"></i>
                                    <?php } else if(get_the_ID() === 127){ ?>
                                        <i class="icon-noun_painting_2076300"></i>
                                    <?php } else if(get_the_ID() === 128){ ?>
                                        <i class="icon-noun_Football_1976193"></i>
                                    <?php }else{ ?>
                                        <i class="icon-<?php the_title();?>"></i>
                                    <?php } 
                                ?>
                                <h3><?php the_title(); ?> </h3>
                            </div>
                        </a>                   
                    </div>
                <?php endwhile; ?> 
            </div> 
        </div>   
    </section>
    <!-- End of CHoose section -->

    <!-- Section News -->
    <?php
        $args = array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        );
        $news = new WP_Query($args);
    ?>
    <section class="news-section ">
        <div class="container news">
            <div class="news-content-title section-gap2">
                <h2 class="news-title"><?php echo get_theme_mod('news-sub-heading'); ?></h2>
            </div>
            <div class="title section-gap">
                <h2><?php echo get_theme_mod('newsheading'); ?></h2>
            </div>    
        </div>
        <div class="container">
            <div class="row ">
                <?php while ($news->have_posts()) : $news->the_post(); ?>
                    <div class="col-lg-4 col-md-8 news-container">
                        <div class="news-content">
                            <div class="date">
                            <p><?php echo get_the_date();?></p>
                        </div>
                        <div class="description-title">
                            <h4><?php the_title();?></h4>
                        </div>
                        <div class="description">
                            <p><?php the_excerpt();?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>    
            </div>
            <div class=" button">
                <a href="<?php echo get_post_type_archive_link('news'); ?>"><?php echo get_theme_mod('news-button'); ?></a>
            </div> 
        </div>  
    </section>
    <!-- End of NEws Section -->

    <!-- Admission -->
    <section class="admission section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="<?php the_permalink(129);?>">
                        <div class="icons">
                            <i class="icon-admission"></i>
                            <h4><?php echo get_the_title(129);?></h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="<?php the_permalink(131);?>">
                        <div class="icons">
                            <i class="icon-noun_Book_3688"></i>
                            <h4><?php echo get_the_title(131);?></h4>
                        </div>
                    </a>                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="<?php the_permalink(133);?>">
                        <div class="icons">
                            <i class="icon-noun_Graduate-Cap_1051"></i>
                            <h4><?php echo get_the_title(133);?></h4>
                        </div>
                    </a>                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="<?php the_permalink(135);?>">
                        <div class="icons">
                            <i class="icon-noun_clipboard_213033"></i>
                            <h4><?php echo get_the_title(135);?></h4>
                        </div>
                    </a>
                </div>       
            </div>   
        </div>
    </section>

    <!-- Events -->
    <?php
        $args = array(
            'post_type' => 'events',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        );
        $events = new WP_Query($args);
    ?>
    <section class="events section-gap">
        <div class="container">
            <div class="headings">
                <div class="left-heading">
                    <h2><?php echo get_theme_mod('events-sub-heading'); ?></h2>
                </div>
                <div class="right-heading">
                    <h2><?php echo get_theme_mod('eventsheading'); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php if ($events->have_posts()) :while ($events->have_posts()) : $events->the_post(); ?>
                    <div class="col-md-4">
                        <div class="events-image">
                            <a href="">
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
                <?php endwhile; ?>                
            </div>
            <div class="button">
                <a href="<?php echo get_post_type_archive_link('events'); ?>"><?php echo get_theme_mod('events-button'); ?></a>
            </div>
                <?php endif; ?>    
        </div>
    </section>

<?php get_footer(); ?>
<!-- Footer section -->
