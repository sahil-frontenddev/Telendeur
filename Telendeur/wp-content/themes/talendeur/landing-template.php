<?php /* Template Name: landing Template */ 


get_header();
?>

	<div  class="landing-main">

	<?php 
		
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); 
			the_content();
			endwhile; 
		endif; 
?>

	</div><!-- #main -->

<?php
get_footer();
