<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php get_header(); ?>
<?php if (is_home() || is_front_page()) { echo do_shortcode("[metaslider id=26]"); }?>

    
<?php get_footer(); ?>