<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bruczek-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="main" class="content-wrapper site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text text-center"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
                        $front_box_args = array('cat' => 4);
                        $front_box = new WP_Query($front_box_args);
			/* Start the Loop */
			while ( $front_box->have_posts() ) : $front_box->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
