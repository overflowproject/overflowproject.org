<?php get_header(); ?>
<div id="container">
<h3><?php the_category(', ') ?> <a href="<?php bloginfo('rss2_url'); ?>"><img src="/images/feed-icon-14x14.png" alt="Feed" /></a></h3>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="results_date"><?php the_time('j'); ?><br><?php the_time('M'); ?><br><?php the_time('Y'); ?></div><div class="results_content">
  <h1><?php the_title(); ?></h1>
   <div class="post">
     <?php the_content(); ?>
   </div><!--end posts-->
</div>
 <?php endwhile; ?>
 <?php else : ?>
 <!-- no posts -->

 <h2>Sorry, no posts were found</h2>
 <?php endif; ?>
<hr>			
</div><!-- end container -->
<?php get_footer(); ?>