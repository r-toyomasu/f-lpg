<?php
/*
Template Name:会員ページテンプレート
*/
?>
    <?php get_header("members"); ?>
    <?php while (have_posts()): the_post(); ?>
    <?php endwhile; ?>
    <?php wp_footer();?>
  </body>
</html>