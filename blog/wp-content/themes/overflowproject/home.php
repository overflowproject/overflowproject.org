<?php get_header(); ?>
<div id="blog-wrapper" class="wrapper">
  <div class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <article>
        <div class="row">
          <div class="-1u 1u">
            <div class="results-date">
              <?php the_time('j'); ?> <br class="mobile-hide">
              <?php the_time('M'); ?> <br class="mobile-hide">
              <?php the_time('Y'); ?>
            </div>
          </div>
          <div class="8u skel-cell-important">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="8u">
            <div class="results-content">             
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>
      <?php endwhile; ?>
    <?php else : ?>
        <h3>Not Found</h3>
    <?php endif; ?>
    <div class="row">
      <div class="-2u 8u">
        <div class="pagination">
          <?php previous_posts_link('<span class="button big"><span class="fa fa-chevron-circle-left"></span> Newer Posts</span>') ?>
          <?php next_posts_link('<span class="button big">Older Posts <span class="fa fa-chevron-circle-right"></span> </span>') ?>
        </div>
      </div>
    </div>
  </div>
</div><!-- end container -->
<?php get_footer(); ?>
