<?php get_header(); ?>
<div id="blog-wrapper" class="wrapper">
  <div class="container">
	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <div class="row">
          <div class="-1u 1u">
            <div class="results-date"><?php the_time('j'); ?> <br class="mobile-hide"><?php the_time('M'); ?> <br class="mobile-hide"><?php the_time('Y'); ?></div>
          </div>
          <div class="8u">
            <div class="results-content"> 
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>
	  <?php endwhile; ?>
	  <?php else : ?>
	  <!-- no posts -->
		  <h2>Sorry, no posts were found</h2>
	  <?php endif; ?>
      <div class="row">
      	<div class="-2u 8u">
  			<a href="/blog" class="button big"><span class="fa fa-reply"></span> Newest Posts</a>
  		</div>
  	</div>
     </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>