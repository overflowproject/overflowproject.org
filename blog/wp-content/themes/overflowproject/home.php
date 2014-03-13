<?php get_header(); ?>
<div id="container">
  <div id="home-left">
  <?php query_posts('pagename=op-description');
  if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
  
<div id="first-post">
  <h3><a href="<?php echo get_settings('home'); ?>/category/blog">Blog</a>
<a href="<?php bloginfo('rss2_url'); ?>"><img src="/images/feed-icon-14x14.png" alt="Feed" /></a></h3>
   <?php query_posts('posts_per_page=1'); ?>
   <?php while (have_posts()) : the_post(); ?>
   <h1><?php the_title(); ?></h1>
     <div style="margin-top:-2px;"><small><?php the_time('m.d.y'); ?></small></div>
     <div style="margin-top:-1em;"><?php the_excerpt() ?></div>
     <?php endwhile; ?>
  <div><a class="opbutton" href="<?php echo get_settings('home'); ?>/category/blog">Read More</a></div>
</div>
  </div>
  <div id="home-right">
    <?php query_posts('pagename=featured-content');
     if (have_posts()) : while (have_posts()) : the_post(); ?>
       <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</div><!-- container -->
<?php get_footer(); ?>