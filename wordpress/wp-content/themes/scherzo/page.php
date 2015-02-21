<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<article <?php post_class(); ?>>

		<header class="entry-header">
		
			<h1 class="entry-title"><?php the_title(); ?></h1>
			
		</header>
		
		<div class="entry-content">
		
			<?php the_content(); ?>
			
		</div>
		
		<section id="comments">
			
			<?php comments_template(); ?>
				
		</section>
		
	</article>
	
<?php endwhile; ?>

</div> <!-- end content -->

<div id="sidebar">

	<?php get_sidebar('universal'); ?>
	
</div>

<?php get_footer(); ?>