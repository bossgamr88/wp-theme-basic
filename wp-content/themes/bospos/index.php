<?php 

// theme done part-1

get_header();

	//  Default loop concept
if(have_posts()) :
	while (have_posts()) : 
		the_post();
?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
		<?php the_content(); ?>

	<?php endwhile;
	
	else : 
		echo "<p>No Content found</p>";
endif;

get_sidebar();
get_footer();

?>