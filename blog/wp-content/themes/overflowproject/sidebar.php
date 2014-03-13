<div id="sidebar">
  
  <?php query_posts('pagename=sidebar-photo');
	if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php endwhile; endif; ?>

<h3>recent</h3>
			<ul>
					<?php	query_posts('showposts=10');	?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li><strong><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></strong></li>
					<?php endwhile; endif; ?>
			</ul>	

<?php if (function_exists('get_recent_comments')) { ?>
<h3>comments</h3>
<ul class="dates"><?php get_recent_comments(); ?></ul>
<?php } ?>

 <h3>Categories</h3>
	 <ul>
	<?php wp_list_categories('show_count=1&title_li='); ?>
	</ul>

<?php if ( function_exists('wp_tag_cloud') ) : ?>
<h3>Tags</h3>
<ul>
<?php wp_tag_cloud('smallest=8&largest=22'); ?>
</ul>
<?php endif; ?>

</div><!--end sidebar-->