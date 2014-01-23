<?php get_header(); ?>

<div id="container">

 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>

<div class="post">
<?php the_content(); ?>
</div><!--end posts-->

 <?php endwhile; ?>
 <?php else : ?>
 <!-- no posts -->

 <h2>Sorry, no posts were found</h2>
 <?php endif; ?>

</div><!-- end container -->
<?php get_footer(); ?>
