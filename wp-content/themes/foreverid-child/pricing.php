  
<?php
/*
Template Name: Pricing Template 
*/
get_header();?>


<div class="feacher-img clr">
<div class="container">
<div class="row">
<div class="col-sm-12">
	    	<?php the_field('header_text'); ?>
		 </div> 
         </div>
         </div>
         </div>

<div class="container user-price">
	 
  <div class="row">
		 			 	 	<div class="col-lg-6 col-md-12">
            <div class="basic">
		 	<div class="head"> <?php the_field('basic_user_text');?> </div>
            <ul>
		 	<?php while( have_rows('basic_user_content') ){   the_row(); ?>
 
		 		<li>
		 			<?php the_sub_field('text'); ?>	
		 		 </li>
	 		 	<?php } ?>
                </ul>
		 		<div class="foot"> <?php the_field('basic_user_link');?> </div>
		 	</div>
</div>
		 	 	<div class="col-lg-6 col-md-12">
                <div class="premium">
		 	 
		 	<div class="head"> <?php the_field('premium_user_text');?> </div>
            <ul>
		 	<?php while( have_rows('premium_user_content') ){   the_row(); ?>
		 		 <li>
 
		 			<?php the_sub_field('text'); ?>	
 </li>
		 	<?php } ?>
            
            
 <div class="rate"> <?php the_field('rate_field');?> </div>


            </ul>
		 		<div class="foot"> <?php the_field('premium_user_link');?> </div>
		 	</div>
		 </div>
</div>

</div>


<?php 
get_footer();?>










