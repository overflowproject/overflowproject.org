<?php get_header(); ?>
  <div id="container">
      <h3><?php the_category(', ') ?> <a href="<?php bloginfo('rss2_url'); ?>"><img src="/images/feed-icon-14x14.png" alt="Feed" /></a></h3>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article>
          <div class="results_date"><?php the_time('j'); ?><br><?php the_time('M'); ?><br><?php the_time('Y'); ?></div>
          <div class="results_content">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div>
              <?php the_content(); ?>
            </div>
          </div>
          <br clear="all"><hr clear="all"><br>
        </article>
        <?php endwhile; ?>
      <?php else : ?>
          <h3>Not Found</h3>
      <?php endif; ?>
      <div class="pagination">
      <ul class="actions">
        <li><?php previous_posts_link('&laquo; Newer') ?>
        <li><?php next_posts_link('Older &raquo;') ?>
      <ul>
      </div>
</div><!-- end container -->
<?php get_footer(); ?>
