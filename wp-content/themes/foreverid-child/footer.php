<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

</div>	<!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
        <div class="container footer-block">
        <div class="row">
		
<div class="f-logo tab-show">        <?php twentysixteen_the_custom_logo(); ?>  </div>
        
        <div class="col-md-5">
		<?php twentysixteen_the_custom_logo(); ?>
		 <div class="bottom-social">
		<?php dynamic_sidebar('bottom-logo-menu');?>
        </div>
       
        
		</div> 
		<div class="col-md-2">
		<?php dynamic_sidebar('learn-more-menu');?>
		</div>
		<div class="col-md-2">
		<?php dynamic_sidebar('company-menu');?>
		</div>
		<div class="col-md-2">
		<?php dynamic_sidebar('text-links');?>
		</div>
    <div class="col-md-2 get-links">
    <?php dynamic_sidebar('get-links');?>
    </div>
    
    <div class="bottom-social soc2 tab-show">  <?php dynamic_sidebar('app-store');?> </div>
    
		</div>
		<div class="none">

			<?php if ( has_nav_menu( 'secondary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<!-- <div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					//do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></span>
				<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php //printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info --> 
			</div>
			<div class="copyy"> Copyright foreverID <?php echo date("Y"); ?>. All rights reserved. </div>
			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>




<style type="text/css">
	/* Disable WhatsApp button on Desktop - Tutorial link: http://crunchify.me/1VIxAsz */
@media screen and (min-width: 1024px) {
    .crunchify-whatsapp {
	display: none !important;
    }
}
 
.crunchify-link {
    padding: 2px 8px 4px 8px !important;
    color: white;
    font-size: 12px;
    border-radius: 2px;
    margin-right: 2px;
    cursor: pointer;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    box-shadow: inset 0 -3px 0 rgba(0,0,0,.2);
    -moz-box-shadow: inset 0 -3px 0 rgba(0,0,0,.2);
    -webkit-box-shadow: inset 0 -3px 0 rgba(0,0,0,.2);
    margin-top: 2px;
    display: inline-block;
    text-decoration: none;
}
 
.crunchify-link:hover,.crunchify-link:active {
    color: white;
}
 
.crunchify-twitter {
    background: #00aced;
}
 
.crunchify-twitter:hover,.crunchify-twitter:active {
    background: #0084b4;
}
 
.crunchify-facebook {
    background: #3B5997;
}
 
.crunchify-facebook:hover,.crunchify-facebook:active {
    background: #2d4372;
}
 
.crunchify-googleplus {
    background: #D64937;
}
 
.crunchify-googleplus:hover,.crunchify-googleplus:active {
    background: #b53525;
}
 
.crunchify-buffer {
    background: #444;
}
 
.crunchify-buffer:hover,.crunchify-buffer:active {
    background: #222;
}
 
.crunchify-pinterest {
    background: #bd081c;
}
 
.crunchify-pinterest:hover,.crunchify-pinterest:active {
    background: #bd081c;
}
 
.crunchify-linkedin {
    background: #0074A1;
}
 
.crunchify-linkedin:hover,.crunchify-linkedin:active {
    background: #006288;
}
 
.crunchify-whatsapp {
    background: #43d854;
}
 
.crunchify-whatsapp:hover,.crunchify-whatsapp:active {
    background: #009688;
}
 
.crunchify-social {
    margin: 20px 0px 25px 0px;
    -webkit-font-smoothing: antialiased;
    font-size: 12px;
}
</style>


<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/devices.min.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/foreverid-child/slider/css/flexslider.css" type="text/css" media="screen" />


  <!-- FlexSlider -->
  <script defer src="<?php echo site_url(); ?>/wp-content/themes/foreverid-child/slider/js/jquery.flexslider.js"></script>

  <style type="text/css">
    .flexslider{
      margin: 31px 0 0px !important;
      border: 0px !important;
    }    

    .flex-control-nav {
      bottom: 0px !important;
    }
  </style>

 
<script type="text/javascript">
  /*slider*/
jQuery(document).ready(function(){
   $('.flexslider-parent').flexslider({
    // slideshow: false,
    selector: ".slides-parent > li",
    animation: "slide",
    easing: "linear",
    useCSS: false,
    controlNav:true,
    directionNav: false,
    slideshowSpeed: 3000,
    // Animation Loop resolves this issue!    
    // animationLoop: false,
    after:function(slider){
        before_parent_slider(slider);
    },
  });


  // Our Two Nested FLexslider
  $('#flexslider-nested-1.flexslider').flexslider({
    sync: "#flexslider-nested-2.flexslider",
    animationLoop: false,
    easing: "linear",
    useCSS: false,
    slideshow: false,
    selector: ".slides-nested-1 > li",
    animation: "slide",
    animationSpeed: 3000,
    direction:"vertical",
    controlNav:false,
    directionNav: false,
    after:function(slider){
      before_child_slider(slider);
    },
  });

    $('#flex-slide-5').click(function(e){
      $('#watchVideo').modal(); 
    });

    $('.flexslider-parent').flexslider('pause');  
    setTimeout(
    function() 
     {
       $('#flexslider-nested-1.flexslider').flexslider(1); 
     }, 2000);

    function before_parent_slider(slider){
        $('#flexslider-nested-1.flexslider').flexslider(0);
        if(slider.currentSlide == 0){
           $('.flexslider-parent').flexslider('pause');   
           setTimeout(
            function() 
             {
               $('#flexslider-nested-1.flexslider').flexslider(1); 
             }, 2000);
        }else{
            if (!slider.playing) {
                slider.play();
            }
        }
    }
    function before_child_slider(slider){
       if(slider.currentSlide == '1'){
          $('.flexslider-parent').flexslider('play');      
       } 
    }
});
</script>
<script>
// $(document).ready(function(){
  // Add smooth scrolling to all links

//   $("#menu-item-229 a").on('click', function(event) {

//     // Make sure this.hash has a value before overriding default behavior
//     if (this.hash !== "") {
//       // Prevent default anchor click behavior
//       event.preventDefault();

//       // Store hash
//       var hash = this.hash;

// $('html, body').animate({ scrollTop: $(hash).offset().top - 120 }, 'slow');
//         // Add hash (#) to URL when done scrolling (default click behavior)
//         window.location.hash = hash;

//     } // End if
//   });
// });
jQuery(document).ready(function(){
  // Add smooth scrolling to all links
  jQuery("#menu-item-232 a ,#menu-item-229 a").on('click', function(event) {
      $href =  jQuery(this).attr('href');

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;

      if(jQuery(hash).length == 0) {
          window.location.href = $href;
      }else{
         jQuery('html, body').animate({ scrollTop: jQuery(hash).offset().top - 120 }, 'slow');
          window.location.hash = hash;
      }

    } // End if
  });
});
</script>

<script type="text/javascript">
    jQuery( document ).ready(function() {
      var watchVideo = document.getElementById("watchVideoFile");
      jQuery('#watchVideoFile').click(function(){
         this.paused?this.play():this.pause();
      });

      jQuery('#watchVideo').on('shown.bs.modal', function (e) {
            watchVideo.currentTime = 0;
            jQuery("#watchVideoFile").trigger('play');
            $('.flexslider-parent').flexslider('pause'); 
      });
      jQuery('#watchVideo').on('hide.bs.modal', function (e) {
            jQuery("#watchVideoFile").trigger('pause');     
            $('.flexslider-parent').flexslider('play'); 
      });
    });
</script>


<script type="text/javascript">
// 	(function($){
//     $(function(){

//         var $copy = $('div.SPA_printcontact').clone();
//         var $body = $('body');

//         $copy.insertAfter('#printdate');

//         if($.browser.msie) {
//             $body.addClass('msie')
//             var userAgent = userAgent.substring(0,userAgent.indexOf('.'));
//             var version = userAgent;
//             $body.addClass('msie' + version)
//         }
//         if($.browser.webkit) {
//             $body.addClass('webkit')
//         }
//         if($.browser.mozilla) {
//             $body.addClass('mozilla')
//         }

//     });
// }(jQuery));
</script>


<script type="text/javascript">
	jQuery(document).ready(function() {
    // Get browser Browser Information
    jQuery.each(jQuery.browser, function(i) {
        jQuery('body').addClass(i);
        return false;
    });
    // Get OS Information
    var os = [
        'iphone',
        'ipad',
        'windows',
        'mac',
        'linux'
    ];
    var match = navigator.appVersion.toLowerCase().match(new RegExp(os.join('|')));
    if (match) {
        jQuery('body').addClass(match[0]);
    };
});
</script>

</body>
</html>