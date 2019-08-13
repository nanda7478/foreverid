<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
 <div class="container"> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">

		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!- - .entry-header -->
 
	<div class="back-link">
		<a href="<?php echo site_url()?>/wp/foreverid/blog"> <i class="fa fa-angle-left" aria-hidden="true"></i> BACK TO BLOG </a>
	</div>
	<div class="row">
		
		<div class="col-md-12 col-lg-12 post-content">
        <div class="post-img">
			<?php twentysixteen_post_thumbnail(); ?>
		</div>
        
<header class="entry-header">			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> </header>
			<div class="post_date">
         	<?php echo get_the_date('M j, Y'); ?>
            </div>
             	
            <div class="social-share">
            <?php echo do_shortcode("[the_content]"); ?> 
            </div>
			<div class="post_category_name"><?php //the_category(); ?> <?php the_tags(' ',' '); ?></div>
             
			<?php //echo crunchify_social_sharing_buttons();?>
			<div class="post-content">
			<?php the_content();?>
			</div>
		</div>
	</div>
 
			
           <?php
		if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-navs" aria-hidden="true">' . __( 'Next Post', 'twentysixteen' ) . '<i class="fa fa-angle-right" aria-hidden="true"></i></span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' ,
					'prev_text' => '<span class="meta-navs" aria-hidden="true"> <i class="fa fa-angle-left" aria-hidden="true"></i>' . __( 'Previous Post', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' ,
				) );
			}

		?>
<div class="more_event">
<div class="row">
<div class="col-xs-12 col-md-12">
    <?php $orig_post = $post;
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $args=array(
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 3, // Number of related posts that will be shown.
    'caller_get_posts'=>1
    );

    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) {
    echo '<div id="related_posts"><h3>More News & Events...</h3><ul>';
    while( $my_query->have_posts() ) {
    $my_query->the_post();?>
    
    <li><div class="relatedthumb"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
    <div class="relatedcontent">
    <h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <div class="read_more_link"><a href="<?php the_permalink();?>">Read More</a></div>
    </div>
    </li>
 
    <?
    }
    echo '</ul></div>';
    }
    }
    $post = $orig_post;
    wp_reset_query(); ?>
   </div>
</div>
</div>
</article><!-- #post-## -->

</div>

<?php get_footer(); ?>
