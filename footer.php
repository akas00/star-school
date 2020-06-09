<section class="footer section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="title ">
						<h5 class="main-title"> <span><?php echo get_theme_mod('addressheading');?></span></h5>
					</div>
				<div class="footer-content">
					<ul>
						<li>
							<a href="#"><i class="fas fa-map-marker-alt"></i><?php echo get_theme_mod('address');?></a>
						</li>
						<li>
							<a href="mailto:mail@gmail.com"><i class="fas fa-envelope"></i><?php echo get_theme_mod('email');?></a>
						</li>
						<li>
							<a href="tel:98410256654"><i class="fas fa-phone-volume"></i><?php echo get_theme_mod('Phone');?></a>
						</li>
						
					</ul>
				</div>

				<?php if (get_theme_mod('facebook')  || get_theme_mod('instagram' )):?>
				<div class=" social-title">
						<h3 class="main-title"> <span><?php echo get_theme_mod('social_Heading');?></span></h3>
						</div>
						<div class="social-icons">
							<?php if (get_theme_mod('facebook')):?>
					    <a href="<?php echo get_theme_mod('facebook'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
					 <?php endif; ?>
					
					<?php if (get_theme_mod('instagram')):?>
					    <a class="padding-left" href="<?php echo get_theme_mod('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
					 <?php endif; ?>
							
							
						</div>
						<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="title ">
						<h5 class="main-title"> <span><?php echo get_theme_mod('schoolheading');?></span></h5>
					</div>
				<div class="footer-content">
					<ul>
				<?php if (get_theme_mod('text1')):?>
					<li>
						<a href="#" target="_blank"><?php echo get_theme_mod('text1');?></a>
					</li>
		        <?php endif; ?>
		        <?php if (get_theme_mod('text2')):?>
		        	<li>
						<a href="#" target="_blank"><?php echo get_theme_mod('text2');?></a>
					</li>
                <?php endif; ?>
		        <?php if (get_theme_mod('text3')):?>
					<li>
						<a href="#" target="_blank"><?php echo get_theme_mod('text3');?></a>
					</li>
		        <?php endif; ?>
		        <?php if (get_theme_mod('text4')):?>
					<li>
						<a href="#" target="_blank"><?php echo get_theme_mod('text4');?></a>
					</li>
		        <?php endif; ?>
		        <?php if (get_theme_mod('text5')):?>
					<li>
						<a href="#" target="_blank"><?php echo get_theme_mod('text5');?></a>
					</li>
		        <?php endif; ?>
		    </ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<?php if (get_theme_mod('link1')  || get_theme_mod('link2') || get_theme_mod('link3') || get_theme_mod('link4')): ?>
					<div class="title ">
						<h5 class="main-title"> <span><?php echo get_theme_mod('link_heading');?></span></h5>
					</div>
					<div class="footer-content">
						<ul>
							<?php if (get_theme_mod('link1')): ?>
							<li>
								<a href="<?php echo get_theme_mod('link1');?>" target="_blank"><?php echo get_theme_mod('link1_name');?></a>
							</li>
							<?php endif; ?>
							<?php if (get_theme_mod('link2')): ?>
							<li>
								<a href="<?php echo get_theme_mod('link2');?>" target="_blank"><?php echo get_theme_mod('link2_name');?></a>
							</li>
							<?php endif; ?>
							<?php if (get_theme_mod('link3')): ?>
							<li>
								<a href="<?php echo get_theme_mod('link3');?>" target="_blank"><?php echo get_theme_mod('link3_name');?></a>
							</li>
							<?php endif; ?>
							<?php if (get_theme_mod('link4')): ?>
							<li>
								<a href="<?php echo get_theme_mod('link4');?>" target="_blank"><?php echo get_theme_mod('link4_name');?></a>
							</li>
							<?php endif; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 footer-form-bg">
				<div class="footer-form">
					<div class="title ">
						<h5 class="main-title"> <span><?php echo get_theme_mod('form');?></span></h5>
					</div>

						  <div class="form-horizontal">

							 <?php echo do_shortcode( '[contact-form-7 id="71" title="footer Contact form"]' );?>
							 
							                                                                    
						</div>	
				</div>
				
							
								
			</div>
		</div>
	</div>
</section>
<section  class="copyright">
	<div class="container">
		<div class="copy-right ">
			<p>Copyright © 2020 Khwopring Academy • All Rights Reserved</p>
		</div>
		<div class="terms ">
			<ul>
				<li>
					<a href="<?php the_permalink(142);?>"><?php echo get_the_title(142);?></a><span>|</span>
				</li>
				<li>
					<a href="<?php the_permalink(144);?>"><?php echo get_the_title(144);?></a><span>|</span>
				</li>
				<li>
					<a href="<?php the_permalink(147);?>"><?php echo get_the_title(147);?></a>
				</li>
			</ul>
		</div>
	</div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/e1cb2f6b47.js" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<?php wp_footer();?>
</body>
</html>