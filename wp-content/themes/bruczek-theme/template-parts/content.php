<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bruczek-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('news-entry'); ?>>
    <div class="entry-content news-content">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="post-thumbnail-wrapper">
                <?php the_post_thumbnail('news-post-thumbnail', array('class' => 'img-responsive blog-thhumbnail')); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="row">
                <header class="entry-header col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php
                    if (is_single()) :
                        the_title('<h1 class="entry-title">', '</h1>');
                    else :
                        the_title('<h2 class="entry-title">', '</h2>');
                    endif;
                    ?>
                </header><!-- .entry-header -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php
                    the_content(sprintf(
                                    /* translators: %s: Name of current post. */
                                    wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'bruczek-theme'), array('span' => array('class' => array('test')))), the_title('<span class="screen-reader-text">"', '"</span>', false)
                    ));

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'bruczek-theme'),
                        'after' => '</div>',
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
