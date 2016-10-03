<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bruczek-theme
 */
get_header();
?>

<div class="container-fluid about-us-wrap">
    <div class="content-wrapper">
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content-front-article', get_post_format());
            ?>
        </div><!-- #main -->
    </div><!-- #primary -->
    <div class="container-fluid ">
        <div class="content-wrapper ">
            <?php
            $comment_args = array('title_reply' => 'Dodaj Komentarz',
                'fields' => apply_filters('comment_form_default_fields', array(
                    'author' => '<p class="comment-form-author">' . '<label for="author">' . __('Your Good Name') . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
                    '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
                    'email' => '<p class="comment-form-email">' .
                    '<label for="email">' . __('Your Email Please') . '</label> ' .
                    ( $req ? '<span>*</span>' : '' ) .
                    '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />' . '</p>',
                    'url' => '')),
                'comment_field' => '<p>' .
                '<label for="comment">' . __('Let us know what you have to say:') . '</label>' .
                '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .
                '</p>',
                'comment_notes_after' => '',
            );
            comment_form($comment_args);
        endwhile; // End of the loop.
        ?>
    </div>
</div>
<?php
get_sidebar();
get_footer();
