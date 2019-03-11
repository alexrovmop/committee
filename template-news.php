<?php
/*
Template Name: News
*/
?>
<?php
	$limit = get_option('posts_per_page');
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts('&showposts=' . $limit . '&paged=' . $paged);
	$wp_query->is_archive = true; $wp_query->is_home = false;

	get_header();
?>

<div id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Do stuff... -->
<?php endwhile; else: ?>
	<p>Sorry, nothing here.</p>
<?php endif; ?>

	<div class="navigation">
		<div class="nav-previous"><?php previous_posts_link(); ?></div>
		<div class="nav-next"><?php next_posts_link(); ?></div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>