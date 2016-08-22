<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php get_header(); ?>
<?php if (is_home() || is_front_page()) { echo do_shortcode("[metaslider id=26]"); }?>
<div class="container-fluid">
    <div class="row jumbotron banner">
        <h1 class="text-baner">Mamy dobrze poukładane</h1>
    </div>
    <div class="row content-wrapper">
        <?php 
            $front_box_args = array('cat' => 4, 'posts_per_page' => 3);
            $front_box = new WP_Query($front_box_args);
        ?>    
        <?php
            if ($front_box->have_posts()) :
                while($front_box->have_posts()) : 
                    $front_box->the_post();
        ?>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 front-box">
                        <?php the_title( '<h1 class="box-header">', '</h1>' ); ?>
                        <?php the_post_thumbnail('front-page-box-thumb', array('class' => 'img-responsive box-thumbnail img-thumbnail')); ?>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Przepraszamy, brak wpisów.' ); ?></p>
        <?php endif; ?>
    </div>
</div>
<div class="jumbotron content-baner">
    <div class="container">
        <div class="row">
            <div class="text-white col-xs-12 col-sm-6 col-lg-6">
                <h3>lorem ipsum dollor sit amet</h3>
                <p>Lorem Ipsum bullla calculata</p>
            </div>
            <div class="jumbotron-buttons col-xs-12 col-sm-6 col-lg-6">
                <button type="button" class="btn btn-default btn-lg  button-grey jumbo-button"><span class="text-white">Przejrzyj nasze projekty</span></button>
                <button type="button" class="btn btn-default btn-lg jumbo-button"><span class="glyphicon glyphicon glyphicon-envelope button-icon" aria-hidden="true"></span>Napisz do nas</button>                
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row content-wrapper">
        <div class="front-article-wrapper">
        <?php 
            $front_article_args = array('cat' => 5, 'posts_per_page' => 1);
            $front_article = new WP_Query($front_article_args);
        ?>
        <?php
            if ($front_article->have_posts()) :
                while($front_article->have_posts()) : 
                    $front_article->the_post();
        ?>
                    <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
                        <?php the_title( '<h1 class="article-header">', '</h1>' ); ?>
                        <div class='post-content'><?php the_content() ?></div>                    
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                        <?php the_post_thumbnail('front-page-box-thumb', array('class' => 'img-responsive img-thumbnail box-thumbnail')); ?>
                    </div>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Przepraszamy, brak wpisów.' ); ?></p>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer();