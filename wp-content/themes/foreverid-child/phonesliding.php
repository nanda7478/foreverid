
<?php 
/*
Display Template Name: Phone Sliding 
*/  
echo count(get_field('slider'));?>

<div class="marvel-device iphone-x">
    <div class="notch">
        <div class="camera"></div>
        <div class="speaker"></div>
    </div>
    <div class="top-bar"></div>
    <div class="sleep"></div>
    <div class="bottom-bar"></div>
    <div class="volume"></div>
    <div class="overflow">
        <div class="shadow shadow--tr"></div>
        <div class="shadow shadow--tl"></div>
        <div class="shadow shadow--br"></div>
        <div class="shadow shadow--bl"></div>
    </div>
    <div class="inner-shadow"></div> 
    <div class="screen">
       <div class="flexslider flexslider-parent">
    <ul class="slides slides-parent">
        <?php count(get_field('grid_block'));
            $index = 0;
        while( have_rows('slider') ): the_row();
            $image = get_sub_field('image');?>
           <?php if($index == 0){ ?>
            <li>
            <div class="flexslider" id="flexslider-nested-1">
                <ul class="slides slides-nested-1">
           <?php }  ?>
           
            <li><img src="<?php echo $image['url']; ?>" class="item" alt="<?php echo $image['alt'] ?>" /></li>
            
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



<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/devices.min.css" type="text/css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/foreverid-child/slider/css/flexslider.css" type="text/css" media="screen" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


  <!-- FlexSlider -->
  <script defer src="<?php echo site_url(); ?>/wp-content/themes/foreverid-child/slider/js/jquery.flexslider.js"></script>

  <style type="text/css">
    .flexslider{
      margin: 31px 0 0px !important;
      border: 0px !important;
    }    
  </style>

 
<script type="text/javascript"> 
$(window).load(function() {     
 $('.flexslider-parent').flexslider({
    // slideshow: false,
    selector: ".slides-parent > li",
    animation: "slide",
    easing: "linear",
    useCSS: false,
    controlNav:false,
    directionNav: false,
    slideshowSpeed: 5000,
    // Animation Loop resolves this issue!    
    // animationLoop: false,
    after:function(slider){
        custome(slider);
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
    animationSpeed: 10000,
    direction:"vertical",
    controlNav:false,
    directionNav: false,
     after:function(slider){
        custome_child(slider);
     },
});
setTimeout(
  function() 
  {
    $('#flexslider-nested-1.flexslider').flexslider('next');
    $('.flexslider-parent').flexslider('pause');
  }, 4000);

function custome_child(slider){
    if(slider.currentSlide == 1){
      $('.flexslider-parent').flexslider('play');
      setTimeout(
      function() 
      {
        $('#flexslider-nested-1.flexslider').flexslider('next');
      }, 5000);
    }
}

function custome(slider){
  if(slider.currentSlide == 0){
    setTimeout(
    function() 
      {
        $('#flexslider-nested-1.flexslider').flexslider('next');
      }, 2000);
    $('.flexslider-parent').flexslider('pause');
  }
}
});
</script>











