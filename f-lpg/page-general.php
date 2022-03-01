<?php
/*
Template Name:一般ページテンプレート
*/
?>
    <?php get_header("general"); ?>
    <?php while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_footer();?>
    <?php get_footer(""); ?>