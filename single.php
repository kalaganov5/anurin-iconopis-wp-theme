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
    <div class="alert">
      <p class="alert__text paragraph">
        <span class="alert__note">Внимание:</span> Страница находиться на оформление, скоро всё будет. Смотреть портфолио <a href="https://anurin-iconopis.ru/#portfolio" class="alert__link">здесь</a>
      </p>
    </div>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
