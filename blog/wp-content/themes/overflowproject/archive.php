<?php get_header(); ?>

  <div id="container">
    <div id="entries">
      <h3><?php if (have_posts()) : ?> <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?> <?php /* If this is a category archive */ if (is_category()) { ?> <?php echo single_cat_title(); ?> <?php /* If this is a daily archive */ } elseif (is_day()) { ?> <?php the_time('F jS, Y'); ?> <?php /* If this is a monthly archive */ } elseif (is_month()) { ?> <?php the_time('F Y'); ?> <?php /* If this is a yearly archive */ } elseif (is_year()) { ?> <?php the_time('Y'); ?> <?php /* If this is a search */ } elseif (is_search()) { ?> Results <?php /* If this is an author archive */ } elseif (is_author()) { ?> Author <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?> Archives <?php /* If this is a paged archive */ } elseif (is_tag()) { ?> <?php echo single_tag_title('Tag: '); ?><?php } ?></h3>
      <ul>
        <?php while (have_posts()) : the_post(); ?>

        <li>
           <div class="results_content">
           <h1 style="display: inline; font-size: 1.6em"><a href="<?php the_permalink(); ?>" style="color:#444444;"><?php the_title(); ?></a></h1><div style="margin-top:-2px;"><small><?php the_time('m.d.y'); ?> <b>|</b> <?php comments_popup_link('Comment?', '1 Comment', '% Comments' ) ?> </small></div>

            <div style="margin-top: -1em;">
              <?php 
the_content("Continue reading " . the_title('', '', false) . "..."); ?>
            </div>
          </div>
<hr>
        </li><?php endwhile; ?>
      </ul><?php else : ?>

      <h3>Not Found</h3><?php endif; ?><?php next_posts_link('&laquo; Previous Entries') ?><br/>
      <?php previous_posts_link('&raquo; Next Entries') ?>

    </div><!--end entries-->

    <?php get_sidebar(); ?>
</div><!-- end container -->
<?php get_footer(); ?>