<?php
/*

Template Name: Home

*/
get_header();
get_sidebar();
?>

		<div id="home_logo"><img src="<?php echo get_bloginfo( 'template_url' ); ?>/images/youchaseme-new-logo-500px.png" title="YouChaseMe" width="500" height="500" /></div>
		<?php
		get_template_part( 'nav', 'main-nav' );
		?>


<?
get_footer();
?>