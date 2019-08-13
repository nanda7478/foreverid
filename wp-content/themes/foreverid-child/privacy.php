  
<?php
/*
Template Name: privacy Template 
*/
get_header();?>


 <div class="feacher-img clr">
<div class="container">
<div class="row">
<div class="col-sm-12">
	    <h1> Privacy  </h1>
		 </div> 
         </div>
         </div>
         </div>

<div class="container">
	<div class="row" id="privacy_text">
     	 <div class="col-sm-12"> <?php the_field('privacy_text'); ?> </div> </div>
	<div class="row" id="security_text"> 
     	 <div class="col-sm-12"> <?php the_field('security_text'); ?> </div> </div>
 
</div>

<?php 
get_footer();?>










