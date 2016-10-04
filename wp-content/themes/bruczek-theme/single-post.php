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
    <div class="container-fluid">
        <div class="content-wrapper">
            <?php
            $comment_args = array('id_form' => 'about-us-form', 'title_reply' => 'Dodaj Komentarz', 'id_submit' => 'form-submit', 'class_submit' => 'submit-about-us',
                'fields' => apply_filters('comment_form_default_fields', array(
                    'author' => '<div class="comment-form-author form-group">' . '<label for="comment-author">' . __('Podpis') . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
                    '<input id="comment-author" class="form-control post-comment-form" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></div>',
                    'email' => '<div class="comment-form-email form-group">' .
                    '<label for="email">' . __('Email') . '</label> ' .
                    ( $req ? '<span>*</span>' : '' ) .
                    '<input id="comment-email" class="form-control post-comment-form" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />' . '</div>',
                    'url' => '')),
                'comment_field' => '<div class="form-group">' .
                '<label for="post-comment">' . __('Komentarz:') . '</label>' .
                '<textarea id="post-comment" class="form-control post-comment-form" name="comment" cols="30" rows="8" aria-required="true"></textarea>' .
                '</div>',
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
