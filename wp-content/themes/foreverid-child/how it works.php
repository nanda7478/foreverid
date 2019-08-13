  
<?php
/*
Template Name: How it works Template 
*/
get_header();?>

<div class="feacher-img">

<div class="container">
<div class="row">
		<div class="col-md-5">
 	    	<?php the_field('header_text'); ?>  
		 </div>
		 <div class="col-md-7">
		 	<div class="video-ss">
		 		<?php $image = get_field('video_screenshot');?>
			
<a data-toggle="modal" data-target="#watchVideo" href="javascript:void(0);" > 		  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /> </a>	
		 	</div>
		 	 
		 </div> 
         </div>
         </div>
</div>


<div class="how-it-work">
		<?php $count = count(get_field('image-text')); 
			$var=1;
			
		?>
		<?php while( have_rows('image-text') ){   the_row(); ?>
<div class="section">		
<div class="container">	
        <div class="row">
        		 
				<div class="col-lg-5 col-sm-12 h-image" >
				<?php $image = get_sub_field('image');?>
					  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />	
				</div>
				<div class="col-lg-7 col-sm-12 h-text">
                <div class="align-middle">
					<?php the_sub_field('text'); 
					if($count==$var) { ?>

				   <?php while( have_rows('download-image-text') ){ the_row(); ?>
        <div class="bam">		
        	<div class="imgg" >
					  <?php $image = get_sub_field('download_image');?>
					  <a href="<?php echo get_sub_field('download_link')?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
			</div>
			<div class="h-text" >
					<?php the_sub_field('download_text'); ?>
			</div>
        </div> 
		   
		    <?php } ?>
		    			 
					<?php } ?>	
                    </div>
				</div>
		    </div>
            </div>
            </div> 
            
		    <?php $var++;
		    	 } ?>

		    
		 

		    <div class="bottom-text">
            	<div class="container">	
        <div class="row">
		    	<?php the_field('bottom_text'); ?>
                </div>
                </div>
		    </div>

 
 </div>


<?php 
get_footer();?>




					



