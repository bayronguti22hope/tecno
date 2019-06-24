<!-- Cada Página -->

<?php get_header()?>

<?php echo get_the_post_thumbnail_url(); ?>

<?php // echo get_the_title(); ?>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer()?>
