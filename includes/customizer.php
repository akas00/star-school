<?php

/*Creating custom option to our Customizer*/
function guide_customize_register( $wp_customize ) {
  
    $wp_customize->add_panel('homepage',array(
            'title' =>__('homepage' ) ,
            'description' => '', 
            'priority' =>10, 
    ) );
    
    $wp_customize->add_panel('footer',array(
            'title' =>__('footer' ) ,
            'description' => '', 
            'priority' =>10, 
    ) );
    
     $wp_customize->add_section( 'logo' , array(
            'title'   => 'Logo',
            'panel'   => 'homepage',
        ) );
       
     $wp_customize->add_section( 'banner' , array(
            'title'   => 'banner',
            'panel'   => 'homepage',
        ) ); 
    
    $wp_customize->add_section( 'notice' , array(
            'title'   => 'Notive Board',
            'panel'   => 'homepage',
        ) );
    
     $wp_customize->add_section( 'about' , array(
            'title'   => 'About',
            'panel'   => 'homepage',
        ) );

    $wp_customize->add_section( 'facilities' , array(
            'title'   => 'Facilities',
            'panel'   => 'homepage',
        ) ); 
    
    $wp_customize->add_section( 'news' , array(
            'title'   => 'News',
            'panel'   => 'homepage',
        ) );

     $wp_customize->add_section( 'events' , array(
            'title'   => 'Events',
            'panel'   => 'homepage',
        ) );
    
    $wp_customize->add_section( 'getintouch' , array(
            'title'   => 'Get In Touch',
            'panel'   => 'footer',
        ) );
    
    $wp_customize->add_section( 'socialicon_links' , array(
            'title'   => 'Social Icon Links',
            'panel'   => 'footer',
        ) );

     $wp_customize->add_section( 'school_academy' , array(
            'title'   => 'Star Academy',
            'panel'   => 'footer',
        ) );

     $wp_customize->add_section( 'useful_links' , array(
            'title'   => 'Useful Links',
            'panel'   => 'footer',
        ) );
     $wp_customize->add_section( 'formheading' , array(
            'title'   => 'Form Heading',
            'panel'   => 'footer',
        ) );
    
    
    
    $wp_customize->add_setting('school_logo', array(
        

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'school_logo', array(
        'label'    => __('School Logo '),
        'section'  => 'logo',
        'settings' => 'school_logo',
        
    )));
    
    // this is the section of the banner customizer   
    
      $wp_customize->add_setting('banner_image', array(
        

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
        'label'    => __('Banner Image '),
        'section'  => 'banner',
        'settings' => 'banner_image',
        
    )));
    
	$wp_customize->add_setting( 'sloganline1', array(
		 'default'           => __( 'Better Education' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'sloganline1',
		    array(
		        'label'    => __( 'slogan line 1' ),
		        'section'  => 'banner',
		        'settings' => 'sloganline1',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'sloganline2', array(
		 'default'           => __( 'For A Better World' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'sloganline2',
		    array(
		        'label'    => __( 'slogan line 2' ),
		        'section'  => 'banner',
		        'settings' => 'sloganline2',
		        'type'     => 'text'
		    )
	    )
	); 
    
    $wp_customize->add_setting( 'noticeBoard', array(
		 'default'           => __( 'Notice' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'noticeBoard',
		    array(
		        'label'    => __( 'Heading' ),
		        'section'  => 'notice',
		        'settings' => 'noticeBoard',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'aboutheading', array(
		 'default'           => __( 'About' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'aboutheading',
		    array(
		        'label'    => __( 'Main Heading' ),
		        'section'  => 'about',
		        'settings' => 'aboutheading',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'welcomeheading', array(
		 'default'           => __( 'a word of welcome' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'welcomeheading',
		    array(
		        'label'    => __( 'Sub-Heading' ),
		        'section'  => 'about',
		        'settings' => 'welcomeheading',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'welcomeparagraph1', array(
		 'default'           => __( 'We are one of the largest, most diverse universities in the USA with over 90,000 students in USA, and a further 30,000 studying across 180 countries for Kingster University.' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'welcomeparagraph1',
		    array(
		        'label'    => __( 'Text Paragraph 1' ),
		        'section'  => 'about',
		        'settings' => 'welcomeparagraph1',
		        'type'     => 'textarea'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'welcomeparagraph2', array(
		 'default'           => __( 'We are one of the largest, most diverse universities in the USA with over 90,000 students in USA, and a further 30,000 studying across 180 countries for Kingster University.' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'welcomeparagraph2',
		    array(
		        'label'    => __( 'Text Paragraph 2' ),
		        'section'  => 'about',
		        'settings' => 'welcomeparagraph2',
		        'type'     => 'textarea'
		    )
	    )
	);

	$wp_customize->add_setting( 'about-button', array(
		 'default'           => __( 'Learn More' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'about-button',
		    array(
		        'label'    => __( 'Button Name' ),
		        'section'  => 'about',
		        'settings' => 'about-button',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'facilitiesheading', array(
		 'default'           => __( 'Facilities' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'facilitiesheading',
		    array(
		        'label'    => __( 'Main Heading' ),
		        'section'  => 'facilities',
		        'settings' => 'facilitiesheading',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'facilities-sub-heading', array(
		 'default'           => __( 'why choose us' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'facilities-sub-heading',
		    array(
		        'label'    => __( 'Sub-Heading' ),
		        'section'  => 'facilities',
		        'settings' => 'facilities-sub-heading',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'facilities-paragraph', array(
		 'default'           => __( 'We are one of the largest, most diverse universities in the USA with over 90,000 students in USA, and a further 30,000 studying across 180 countries for Kingster University.' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'facilities-paragraph',
		    array(
		        'label'    => __( 'Text Paragraph' ),
		        'section'  => 'facilities',
		        'settings' => 'facilities-paragraph',
		        'type'     => 'textarea'
		    )
	    )
	);

	$wp_customize->add_setting( 'facilities-button', array(
		 'default'           => __( 'Learn More' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'facilities-button',
		    array(
		        'label'    => __( 'Button Name' ),
		        'section'  => 'facilities',
		        'settings' => 'facilities-button',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'newsheading', array(
		 'default'           => __( 'News' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'newsheading',
		    array(
		        'label'    => __( 'Heading' ),
		        'section'  => 'news',
		        'settings' => 'newsheading',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'news-sub-heading', array(
		 'default'           => __( 'Latest News' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'news-sub-heading',
		    array(
		        'label'    => __( 'Sub-Heading' ),
		        'section'  => 'news',
		        'settings' => 'news-sub-heading',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'news-button', array(
		 'default'           => __( 'Learn More' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'news-button',
		    array(
		        'label'    => __( 'Button Name' ),
		        'section'  => 'news',
		        'settings' => 'news-button',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'eventsheading', array(
		 'default'           => __( 'Events' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'eventsheading',
		    array(
		        'label'    => __( 'Heading' ),
		        'section'  => 'events',
		        'settings' => 'eventsheading',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'events-sub-heading', array(
		 'default'           => __( 'Recent Activities' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'events-sub-heading',
		    array(
		        'label'    => __( 'Sub-Heading' ),
		        'section'  => 'events',
		        'settings' => 'events-sub-heading',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'events-button', array(
		 'default'           => __( 'Learn More' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'events-button',
		    array(
		        'label'    => __( 'Button Name' ),
		        'section'  => 'events',
		        'settings' => 'events-button',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'addressheading', array(
		 'default'           => __( 'Get In Touch' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'addressheading',
		    array(
		        'label'    => __( 'Heading' ),
		        'section'  => 'getintouch',
		        'settings' => 'addressheading',
		        'type'     => 'text'
		    )
	    )
	);
	    
    $wp_customize->add_setting( 'address', array(
		 'default'           => __( 'Chayamasingh, Bhaktapu' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'address',
		    array(
		        'label'    => __( 'Address' ),
		        'section'  => 'getintouch',
		        'settings' => 'address',
		        'type'     => 'text'
		    )
	    )
	); 
    
    $wp_customize->add_setting( 'email', array(
		 'default'           => __( 'support@gmail.com' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'email',
		    array(
		        'label'    => __( 'email' ),
		        'section'  => 'getintouch',
		        'settings' => 'email',
		        'type'     => 'text'
		    )
	    )
	);
    
     $wp_customize->add_setting( 'Phone', array(
		 'default'           => __( '+555 786 67 67' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Phone',
		    array(
		        'label'    => __( 'Phone Number' ),
		        'section'  => 'getintouch',
		        'settings' => 'Phone',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'social_Heading', array(
		 'default'           => __( 'Social' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'social_Heading',
		    array(
		        'label'    => __( 'socialicon Heading' ),
		        'section'  => 'socialicon_links',
		        'settings' => 'social_Heading',
		        'type'     => 'text'
		    )
	    )
	);

    $wp_customize->add_setting( 'facebook', array(
		 'default'           => __( 'https://www.facebook.com/' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'facebook',
		    array(
		        'label'    => __( 'Facebok Link' ),
		        'section'  => 'socialicon_links',
		        'settings' => 'facebook',
		        'type'     => 'text'
		    )
	    )
	);
    
    $wp_customize->add_setting( 'instagram', array(
		 'default'           => __( 'https://www.instagram.com/' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'instagram',
		    array(
		        'label'    => __( 'Instagram Link' ),
		        'section'  => 'socialicon_links',
		        'settings' => 'instagram',
		        'type'     => 'text'
		    )
	    )
	);
    
        $wp_customize->add_setting( 'schoolheading', array(
		 'default'           => __( 'Star Academy' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'schoolheading',
		    array(
		        'label'    => __( 'Heading' ),
		        'section'  => 'school_academy',
		        'settings' => 'schoolheading',
		        'type'     => 'text'
		    )
	    )
	);
        
    $wp_customize->add_setting( 'text1', array(
		 'default'           => __( 'Elementary School' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'text1',
		    array(
		        'label'    => __( 'Text 1' ),
		        'section'  => 'school_academy',
		        'settings' => 'text1',
		        'type'     => 'text'
		    )
	    )
	);
    
     $wp_customize->add_setting( 'text2', array(
		 'default'           => __( 'Middle School' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'text2',
		    array(
		        'label'    => __( 'Text 2' ),
		        'section'  => 'school_academy',
		        'settings' => 'text2',
		        'type'     => 'text'
		    )
	    )
	);
       
     $wp_customize->add_setting( 'text3', array(
		 'default'           => __( 'High School' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'text3',
		    array(
		        'label'    => __( 'Text 3' ),
		        'section'  => 'school_academy',
		        'settings' => 'text3',
		        'type'     => 'text'
		    )
	    )
	);
    
      $wp_customize->add_setting( 'text4', array(
		 'default'           => __( 'Arts, Activities' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'text4',
		    array(
		        'label'    => __( 'Text 4' ),
		        'section'  => 'school_academy',
		        'settings' => 'text4',
		        'type'     => 'text'
		    )
	    )
	);
    
      $wp_customize->add_setting( 'text5', array(
		 'default'           => __( 'Athletics' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'text5',
		    array(
		        'label'    => __( 'Text 5' ),
		        'section'  => 'school_academy',
		        'settings' => 'text5',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'link_heading', array(
		 'default'           => __( 'Useful Links' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'link_heading',
		    array(
		        'label'    => __( 'Link Heading' ),
		        'section'  => 'useful_links',
		        'settings' => 'link_heading',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'link1_name', array(
		 'default'           => __( '' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'link1_name',
		    array(
		        'label'    => __( 'Link 1 Heading' ),
		        'section'  => 'useful_links',
		        'settings' => 'link1_name',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'link1', array(
		 'default'           => __( '' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'link1',
		    array(
		        'label'    => __( 'Link 1' ),
		        'section'  => 'useful_links',
		        'settings' => 'link1',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'link2_name', array(
		 'default'           => __( '' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'link2_name',
		    array(
		        'label'    => __( 'Link 2 Heading' ),
		        'section'  => 'useful_links',
		        'settings' => 'link2_name',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'link2', array(
		 'default'           => __( '' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'link2',
		    array(
		        'label'    => __( 'Link 2' ),
		        'section'  => 'useful_links',
		        'settings' => 'link2',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'link3_name', array(
		 'default'           => __( '' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'link3_name',
		    array(
		        'label'    => __( 'Link 3 Heading' ),
		        'section'  => 'useful_links',
		        'settings' => 'link3_name',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'link3', array(
		 'default'           => __( '' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'link3',
		    array(
		        'label'    => __( 'Link 3' ),
		        'section'  => 'useful_links',
		        'settings' => 'link3',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'link4_name', array(
		 'default'           => __( '' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'link4_name',
		    array(
		        'label'    => __( 'Link 4 Heading' ),
		        'section'  => 'useful_links',
		        'settings' => 'link4_name',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'link4', array(
		 'default'           => __( '' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'link4',
		    array(
		        'label'    => __( 'Link 4' ),
		        'section'  => 'useful_links',
		        'settings' => 'link4',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'form', array(
		 'default'           => __( 'Subscribe to our newsletter' ),
		 'sanitize_callback' => 'esc_attr'
	) );
	
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'form',
		    array(
		        'label'    => __( 'Form Heading' ),
		        'section'  => 'formheading',
		        'settings' => 'form',
		        'type'     => 'text'
		    )
	    )
	);
    
}

add_action( 'customize_register', 'guide_customize_register' );
