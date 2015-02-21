<?php get_header(); ?>

<section id="main-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<p><time datetime="<?php the_time('Y-m-d')?>">Posted <?php the_time('F jS, Y') ?></time>.</p>
		</header>
		
		<?php the_post_thumbnail(); ?>
		<?php the_content(''); ?>
		
	</article>
	
	<?php comments_template(); ?>
	
<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>