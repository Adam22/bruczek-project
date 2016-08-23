<?php
/*
Template Name: Kontakt template
*/
?>
<?php
get_header(); ?>

	<div class="container-fluid">
		<div class="row content-wrapper">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>

		</div>
	</div>
        <div class="map-wrapper">
            <?php echo do_shortcode("[ank_google_map]"); ?>
        </div>

<?php
get_footer();