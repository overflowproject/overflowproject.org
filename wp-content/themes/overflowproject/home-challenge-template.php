<?php
/*
Template Name: HomeChallenge
*/
?>
<?php get_header(); ?>
<div id="container home">
<div class="right-sidebar home">
  <?php query_posts('pagename=featured-challenge-content');
     if (have_posts()) : while (have_posts()) : the_post(); ?>
       <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>
<div class="left-content home">
  <?php query_posts('pagename=challenge-video');
     if (have_posts()) : while (have_posts()) : the_post(); ?>
       <?php the_content(); ?>
  <?php endwhile; endif; ?>

  <?php query_posts('pagename=op-description');
  if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
  
   <?php query_posts('posts_per_page=1'); ?>
   <?php while (have_posts()) : the_post(); ?>
  <h3><a href="<?php echo get_settings('home'); ?>/category/blog/">Blog</a>: <?php the_title(); ?>
<a href="<?php bloginfo('rss2_url'); ?>"><img src="/images/feed-icon-14x14.png" alt="Feed" class="rss-icon"/></a></h3>
     <div class="excerpt"><?php the_excerpt() ?></div>
     <?php endwhile; ?>
  <div><a class="opbutton" href="<?php echo get_settings('home'); ?>/category/blog/">Read More</a></div>
</div>
</div><!-- container -->
<?php get_footer(); ?>
