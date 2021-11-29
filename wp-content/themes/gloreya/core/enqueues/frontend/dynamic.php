<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * dynamic css, generated by customizer options
 */

if ( defined( 'FW' ) ) {
    
    $typography = gloreya_option( 'typography' );
    $body_bg = gloreya_option( 'style_body_bg', '#fff' );
    $style_primary = gloreya_option( 'style_primary', '#e7272d');
    $title_color = gloreya_option( 'title_color', '#222');
    $style_primary_dark = gloreya_option( 'style_primary_dark','#b92125');

    
    // banner style
    $banner_style_settings = gloreya_option( 'banner_style_settings');
    $banner_overlay_color = $banner_style_settings['banner_overlay_color'];
    $banner_title_color = $banner_style_settings['banner_title_color'];
    $banner_heighlihgt_title_color = $banner_style_settings['banner_heighlihgt_title_color'];
    
    
    // menu settings


    $menu_color = gloreya_option( 'menu_color');
    $menu_hover_color = gloreya_option( 'menu_hover_color');
    $dropdown_menu_color = gloreya_option( 'dropdown_menu_color');
    $dropdown_menu_hover_color = gloreya_option( 'dropdown_menu_hover_color');
    $menu_font = gloreya_option( 'menu_font');



    // table button
    $header_table_button_settings = gloreya_option( 'header_table_button_settings');
     $header_button_bg_color = $header_table_button_settings['header_button_bg_color'];
     $header_button_text_color = $header_table_button_settings['header_button_text_color'];

     $header_button_bg_colors='';
     $header_button_text_colors='';

    if($header_button_bg_color !=''){
        $header_button_bg_colors = $header_button_bg_color;
    }
    if($header_button_text_color !=''){
        $header_button_text_colors = $header_button_text_color;
    }

    $global_body_font = gloreya_option( 'body_font' );
    Gloreya_Unyson_Google_Fonts::add_typography_v2( $global_body_font );
    $body_font = gloreya_advanced_font_styles( $global_body_font );
    $body_font= gloreya_array_elements_remove($body_font, 2);
    
    $heading_font_one = gloreya_option( 'heading_font_one' );
    Gloreya_Unyson_Google_Fonts::add_typography_v2( $heading_font_one );
    $heading_font_one = gloreya_advanced_font_styles( $heading_font_one );
   
    $heading_font_two = gloreya_option( 'heading_font_two' );
    Gloreya_Unyson_Google_Fonts::add_typography_v2( $heading_font_two );
    $heading_font_two = gloreya_advanced_font_styles( $heading_font_two );

    $heading_font_three = gloreya_option( 'heading_font_three' );
    Gloreya_Unyson_Google_Fonts::add_typography_v2( $heading_font_three );
    $heading_font_three = gloreya_advanced_font_styles( $heading_font_three );

    $heading_font_four = gloreya_option( 'heading_font_four' );
    Gloreya_Unyson_Google_Fonts::add_typography_v2( $heading_font_four );
    $heading_font_four = gloreya_advanced_font_styles( $heading_font_four );

    Gloreya_Unyson_Google_Fonts::add_typography_v2( $menu_font );
    $menu_font = gloreya_advanced_font_styles( $menu_font );

    // init custom css
    $custom_css	 = gloreya_option( 'custom_css' );
    $output = $custom_css;

    // global style
    $output	.= "
        body{ $body_font }

        h1{
            $heading_font_one
        }
        h2{
            $heading_font_two 
        }
        h3{ 
            $heading_font_three 
        }

        h4{ 
            $heading_font_four
        }
    
       
      

        a, .post-meta span i, .entry-header .entry-title a:hover, .sidebar ul li a:hover{
            color: $style_primary;
        }

        .entry-header .entry-title a,
        .post .entry-header .entry-title a{
            color: $title_color;
        }
     
        body{
            background-color: $body_bg;
        }
      
     
        .single-intro-text .count-number, .sticky.post .meta-featured-post,
        .sidebar .widget .widget-title:before, .pagination li.active a, .pagination li:hover a,
        .pagination li.active a:hover, .pagination li:hover a:hover,
        .sidebar .widget.widget_search .input-group-btn,
        .BackTo, .ticket-btn.btn:hover,
        .woocommerce div.product form.cart .button,
        .btn-primary,
        .BackTo,
        .header-book-btn .btn-primary,
        .header .navbar-container .navbar-light .main-menu > li > a:before,
        .header-transparent:before,
        .header-transparent .header-cart .cart-link a sup,
        .header-transparent .navSidebar-button,
        .owl-carousel .owl-dots .owl-dot.active,
        .testimonial-carousel.owl-carousel.style4 .author-name:after,
        .xs-review-box .xs-review .xs-btn,
        .sidebar .widget-title:before,
        .not-found .input-group-btn,
        .ts-product-slider.owl-carousel .owl-nav .owl-prev:hover, .ts-product-slider.owl-carousel .owl-nav .owl-next:hover,
        .woocommerce ul.products li.product .button,.woocommerce ul.products li.product .added_to_cart,
        .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.sponsor-web-link a:hover i, .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        .woocommerce span.onsale,
        .navbar-light .navbar-toggler,
        .ts-contact-form .form-group .btn-submit:hover,
        .woocommerce table.cart td.actions button.button,
        .woocommerce a.button, .woocommerce button.button.alt,
        .faq .elementor-accordion .elementor-accordion-item .elementor-tab-title.elementor-active .elementor-accordion-icon,
        .woocommerce ul.products li.product .added_to_cart:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle{
            background: $style_primary;
        }


        .btn-primary,
        .sidebar .widget.widget_search .form-control:focus,
        .not-found .form-control:focus,
        .ts-contact-form .form-group .btn-submit:hover,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active{
            border-color: $style_primary;
        }

      

        .copyright .footer-social li a i:hover,
        .copyright .copyright-text a,
        .header .navbar-container .navbar-light .main-menu li a:hover,
        .header .navbar-container .navbar-light .main-menu li.active > a,
        .post .entry-header .entry-title a:hover,
        a:hover,
        .ts-footer .footer-menu li a:hover,
        .tag-lists a:hover, .tagcloud a:hover,
        .post-navigation span:hover, .post-navigation h3:hover,
        #rev_slider_4_1  .gloreya .tp-bullet.selected:after,
        #rev_slider_4_1 .gloreya.tparrows::before,
        .woocommerce ul.products li.product .woocommerce-loop-product__title:hover{
            color: $style_primary;
        }

        .footer-widget p strong a,
        .nav-classic-transparent.header .navbar-container .navbar-light .main-menu li a:hover{
            color: $style_primary_dark;

        }

        .header-book-btn .btn-primary:hover,
        .btn-primary:hover,
        .xs-review-box .xs-review .xs-btn:hover,
        .nav-classic-transparent .header-cart .cart-link a sup{
            background: $style_primary_dark;
        }
        .header-book-btn .btn-primary:hover,
        .btn-primary:hover{
            border-color: $style_primary_dark;
        }

        

        ";
     
     if($header_button_bg_colors!=''){
         $output .= "
         .header-book-btn .btn-primary{
            background: $header_button_bg_colors;
            border-color: $header_button_bg_colors;
        }
         "; 
      }    
     if($header_button_text_colors!=''){
         $output .= "
         .header-book-btn .btn-primary{
            color: $header_button_text_colors;
        }
         "; 
      }    
  
     if($dropdown_menu_hover_color!=''){
         $output .= "
         .header .navbar-container .navbar-light .main-menu li ul.dropdown-menu li a:hover{
            color: $dropdown_menu_hover_color;
        }
         "; 
      }    
     if($dropdown_menu_color!=''){
         $output .= "
         .header .navbar-container .navbar-light .main-menu li ul.dropdown-menu li a{
            color: $dropdown_menu_color;
        }
         "; 
      }    
     if($menu_color!=''){
         $output .= "
            .header .navbar-container .navbar-light .main-menu > li > a,
            .header-transparent .header-nav-right-info li{
            color:  $menu_color;
         }"; 
      }    
      

     if(isset($menu_font)){
         $output .= "
            .header .navbar-container .navbar-light .main-menu > li > a,
            .header-transparent .header-nav-right-info li{
             $menu_font
         }"; 
      }    
     if($menu_hover_color!=''){
         $output .= "
           .header .navbar-container .navbar-light .main-menu > li > a:hover{
            color:  $menu_hover_color; 
           }
         "; 
      }    
     if($banner_title_color!=''){
         $output .= "
              .banner-area .banner-title{
                 color: $banner_title_color;
               }
             "; 
      }    
     if($banner_heighlihgt_title_color!=''){
         $output .= "
         .banner-area .banner-title span{
            color: $banner_heighlihgt_title_color;
            }
          "; 
      }    
     if($banner_overlay_color!=''){
         $output .= "
         .banner-area:before{
            background-color: $banner_overlay_color;
         }
         "; 
      }    
       
  




    // footer style
    $footer_bg_img = gloreya_option( 'footer_bg_img' );
      
    if(is_array($footer_bg_img) && isset($footer_bg_img['url']) && $footer_bg_img['url'] !=''){
        $footer_bg_img = $footer_bg_img['url'];
   }
   $footer_bg_url = 'background-image:url('. $footer_bg_img .');'; 


    $footer_bg_color = gloreya_option( 'footer_bg_color', '#1b1b1b' );
    $footer_copyright_color = gloreya_option( 'footer_copyright_color', '#aaa' );
    $footer_padding_top = gloreya_option( 'footer_padding_top', '70px' );
    $output	.= "

        .ts-footer{
            background-color: $footer_bg_color;
            padding-top:$footer_padding_top;
            $footer_bg_url;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        ";
     $output .= "

      .copyright .copyright-text{
         color: $footer_copyright_color;
      }

     ";   

    wp_add_inline_style( 'gloreya-style', $output );
}

