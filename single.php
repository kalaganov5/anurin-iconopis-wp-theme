<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Painter_Yuriy_Anurin
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', get_post_type());

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
