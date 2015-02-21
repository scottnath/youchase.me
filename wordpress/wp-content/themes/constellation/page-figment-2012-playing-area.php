<?php get_header(); ?>

<section id="main-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		
		<?php if (get_option('constellation_show_subpages')=='yes') {
			$subpages = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&sort_column=menu_order&depth=1');
			if ($subpages) echo '<nav id="subpages"><ul>' . str_replace('</a>',' &rarr;</a>',$subpages) . '</ul></nav>';
		} ?>
		
		<?php the_content(''); ?>
		
<script type="text/javascript">
	function initialize() {
		var latlng = new google.maps.LatLng(40.6888490,-74.0150500);
		var settings = {
			zoom: 17,
			center: latlng,
			mapTypeControl: true,
			mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
			navigationControl: true,
			navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
			mapTypeId: google.maps.MapTypeId.SATELLITE
    	};
    	var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
		var companyPos = new google.maps.LatLng(40.6888490,-74.0150500);
		var companyLogo = new google.maps.MarkerImage('<?=get_bloginfo('template_directory')?>/images/youchaseme-shadow-58.png',
			new google.maps.Size(58,58),
			new google.maps.Point(0,0),
			new google.maps.Point(58,58)
		);
		var companyMarker = new google.maps.Marker({
	      position: companyPos,
	      map: map,
	      title:"Some title",
	      icon: companyLogo
		});
		//var contentString = '<strong>Location Approximate</strong>'+
		    '<p>Final placement not yet received</p>';
		 
		var infowindow = new google.maps.InfoWindow({
		    content: contentString
		});
		/*
google.maps.event.addListener(companyMarker, 'click', function() {
		  infowindow.open(map,companyMarker);
		});
*/

	}
	jQuery(document).ready(function($) {
	    initialize();
	    
	});
</script>

 <div id="map_canvas" style="width:800px; height:500px"></div>


	</article>
	
	<?php comments_template(); ?>

<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>