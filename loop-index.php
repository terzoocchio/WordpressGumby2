
  <div class="row">
<?php /* Start loop */ ?>


<?php while (have_posts()) : the_post(); ?>


    <div class="four columns" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	
        
	<?php if (is_archive() || is_search()) : // Only display excerpts for archives and search ?>
		<?php the_excerpt(); ?>
	<?php else : ?>
		<?php the_content('Continue reading...'); ?>
	<?php endif; ?>
        
        
        
    
        </div>
<?php endwhile; // End the loop ?>

  </div>

  <!-- Three-up Content Blocks -->