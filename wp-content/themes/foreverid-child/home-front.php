  
<?php
/*
Template Name: Home-front Template 
*/
get_header();?>
<div class="header-img">
<div class="container">
<div class="row">
<div class="banner-image col-sm-5">
	 <div class="iphone-8">
	 	<div class="flexslider flexslider-parent">
		    <ul class="slides slides-parent">
		        <?php count(get_field('grid_block'));
		            $index = 0;
		        while( have_rows('phone_slide_image') ): the_row();
		            $image = get_sub_field('image');?>
		           <?php if($index == 0){ ?>
		            <li>
		            <div class="flexslider" id="flexslider-nested-1">
		                <ul class="slides slides-nested-1">
		           <?php }  ?>
		           
		            <li <?php if($index == 5) {?> data-toggle="modal" data-target="#watchVideo" <?php } ?>  ><img src="<?php echo $image['url']; ?>" class="item" alt="<?php echo $image['alt'] ?>" /></li>
		            
		           <?php if($index == 1){ ?>
		                </ul>
		            </div>
		          </li>
		           <?php  } ?>
		    <?php $index++; endwhile; ?>
		    </ul>
		</div>
	 </div>
</div> 
	<div class="banner-text col-lg-7"> <div class="text"> <?php the_field('banner_text_'); ?> </div> </div>
</div>
</div>
</div>
<div class="user-id-block">
<div class="container">
<div class="row">

	<div class="text-center offset-4 forever-tittle col-sm-8">  <?php the_field('forever_text'); ?>  </div>
    
    </div>
 <div class="row useid">
 
 	<?php while( have_rows('image_with_text_') ): the_row(); ?>
 	 
		<div class="col-sm-6 col-lg-3">
		<div class="sequence">
		<?php the_sub_field('sequence'); ?>
		</div>
			<div class="imgs">
			<?php
			$image = get_sub_field('images');?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			</div>
			<div class="txt">
			<?php the_sub_field('text'); ?>
			</div>
		</div>
	

	<?php endwhile; ?>
	</div>
    
    </div>
    </div>
    
    <div class="container text-block">

<?php
while ( have_rows('image_text_flaxible') ) { the_row();
  	if( get_row_layout() == 'image_txt_1' ){?>
			<div class="row image-text">
			    <div class="col-md-12 col-lg-5 image-content">
                <div class="texts">
                	<?php $image2 = get_sub_field('image_network_smarter'); ?>
				    <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />               
			    	
			    </div>
				</div>
				<div class="col-md-12 col-lg-7 textarea-content">
			        	<?php the_sub_field('text_network_smarter'); ?>               
	            </div>
            </div>   		
      	<?php
      	}
      	if( get_row_layout() == 'image_txt_2' ){?>
			<div class="row image-text secn">
			    <div class="col-md-12 col-lg-5 image-content">
                <div class="texts">
                	<?php $image2 = get_sub_field('image_change_invitable'); ?>
				    <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />               
			    	
			    </div>
				</div>
				<div class="col-md-12 col-lg-7 textarea-content">
			        	<?php the_sub_field('text_change_invitable'); ?>               
	            </div>
            </div>   
            
            <div class="row work-with">		
      	<?php
      	}
      	if( get_row_layout() == 'text_designed_work_with' ){?>
			
			   
				 
			        	<?php the_sub_field('designed_work_with'); ?>               
	          
              		
      	<?php
      	}
      	}?>	
      	

	<?php while( have_rows('work_with_images') ): the_row(); ?>
		


		<div class="col-sm-6 col-md-6 col-lg-4">
			<div class="imgs">
			<?php
			$image = get_sub_field('images'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			</div>
		</div>
	

	<?php endwhile; ?>


<?php while( have_rows('work_with_images_mobile') ): the_row(); ?>
<div class="col-md-12">
<div class="imgs">
			<?php
			$image = get_sub_field('images'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
</div>
</div>
	

	<?php endwhile; ?>
    
</div>


</div>
<div class="apps">
<div class="container">
<div class="row"><?php the_field('download_text'); ?></div>
<div class="clr"> 
	<?php while( have_rows('download_repeater') ): the_row(); ?>
		


	 
			<div class="download_image">
			<?php
			$image = get_sub_field('download_image'); ?>
			<a href="<?php echo get_sub_field('download_link')?>"> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
			</div>
		 
	

	<?php endwhile; ?>

</div>
</div>
</div>
	

<?php  get_footer();?>

