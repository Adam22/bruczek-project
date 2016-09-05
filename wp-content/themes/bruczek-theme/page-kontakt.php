<?php
/*
  Template Name: Kontakt template
 */
?>
<?php get_header(); ?>

<div class="container-fluid">
    <div class="content-wrapper">
        <div class="row">
            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'contact');
            endwhile; // End of the loop.
            ?>
        </div>
        <div class="row contact-form-wrapper">
            <h2 class="form-header text-center">Formularz Kontaktowy</h2>
            <?php echo do_shortcode('[contact-form-7 id="125" title="Formularz Kontaktowy"]'); ?>
        </div>
    </div>
</div>
<div class="map-wrapper">
    <?php echo do_shortcode("[ank_google_map]"); ?>
</div>

<?php
get_footer();
