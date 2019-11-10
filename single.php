<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php echo get_the_date(); ?></p>
            <img class="single_post_thumb" src="<?php echo get_the_post_thumbnail_url() ?>" alt="post thumbnail">
            <p><?php the_content(); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>