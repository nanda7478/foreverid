  
<?php
/*
Template Name: Company Template 
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
         
<div class="campany">
<div class="co-image">
		 			<?php $image = get_field('left_image');?>
					  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
		 	</div>
         <div class="container">
		 <div class="row">
		 	<div class="col-sm-2">
		 			 
		 	</div>
		 	<div class="col-lg-8 col-sm-12 co-text">
		 			<?php the_field('text'); ?>
		 	</div>
		 	<div class="col-sm-2">
		 			 
		 	</div>
            
		 </div>
         
		 <div class="center-img">
		 	<?php $image = get_field('center_image');?>
					  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
		 </div>
         
         </div>
         
         <div class="co-right co-image">
		 			<?php $image = get_field('right_image');?>
					  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
		 	</div>
            
         
         </div>
      
      
      <div class="help-you">    
         <div class="container">
		  <div class="row">
          <div class="col-sm-12" id="how_text">
		 	<?php the_field('how_text'); ?>
		 </div>
         </div>
         
		 <div class="row">
		 	<?php while( have_rows('boxes') ){   the_row(); ?>
		 	 <div class="col-sm-12 col-lg-4">
             <div class="content">
             <a href="<?php the_sub_field('box_url'); ?>">
		 		<?php the_sub_field('text_content'); ?>
		 	</a> 
            </div>
            </div>
		 	<?php 	} ?>
		 	 
		 </div>
         </div>
 </div>
 
<div class="apps">
<div class="container">
<div class="row"> <?php the_field('download_txt'); ?> </div>
<div class="clr"> 
<?php while( have_rows('download_img') ): the_row(); ?>		


	 
			<div class="download_image">
			<?php
			$image = get_sub_field('download_image'); ?>
			<a href="<?php echo get_sub_field('download_link')?>"> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /> </a>
		</div>
		 
	

	<?php endwhile; ?>

</div>
</div>
</div>


 
 
 
 
<?php get_footer();?>










