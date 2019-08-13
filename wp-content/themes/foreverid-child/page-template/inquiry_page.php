<?php
/*
Template Name: Inquiry Form 
*/
get_header();?>




         <div class="container">
		 <div class="row">
		 	
		<div class="col-sm-12">
		<div class="contact-form">
		 <?php the_field('header_content'); ?>
		 <?php echo do_shortcode( '[contact-form-7 id="222" title="Contact form 1"]' );?>
		 </div>
		 </div> 
		 </div>
         
         </div>
         
     
         
 



<div class="help-you">    
         <div class="container">
		  <div class="row">
          <div class="col-sm-12" id="how_text">
		 	<?php the_field('content_box_title'); ?>
		 </div>
         </div>
         
		 <div class="row">
		 	<?php while( have_rows('contact_text_box') ){   the_row(); ?>
		 	 <div class="col-sm-12 col-lg-4">
             <div class="content">
             <a href="<?php the_sub_field('box_url'); ?>">
		 		<?php the_sub_field('text_box'); ?>
		 	</a> 
            </div>
            </div>
		 	<?php 	} ?>
		 	 
		 </div>
         </div>
 </div>



<?php  get_footer(); ?>
