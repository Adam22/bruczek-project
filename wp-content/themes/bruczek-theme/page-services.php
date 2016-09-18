<?php
/*
  Template Name: Services template
 */
?>
<?php get_header(); ?>

<div class="container-fluid">
    <div class="content-wrapper">
        <div class="row">
            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'services');
            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
