<?php get_header(); ?>
<div id="blog-wrapper" class="wrapper">
  <div class="container">
	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <div class="row">
          <div class="-2u 8u">
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
		  <h2>Sorry, page not found.</h2>
	  <?php endif; ?>
     </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>