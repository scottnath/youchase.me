<?php
/*

Template Name: Home

*/
get_header();
?>

		<div id="home_logo"><img src="<?php echo get_bloginfo( 'template_url' ); ?>/images/youchaseme-new-logo-500px.png" title="YouChaseMe" width="500" height="500" /></div>
		<nav id="main-nav" role="navigation"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?></nav>


<?
get_footer();
?>