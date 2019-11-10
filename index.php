<?php get_header() ?>
<?php get_sidebar() ?>
<!-- Main Content goes here -->
<div class="main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <h5><?php echo get_the_date() ?></h5>
            <img class="post_thumb" src="<?php echo get_the_post_thumbnail_url() ?>" alt="post thumbnail">
            <!-- <?php the_content() ?> -->
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>">
                <h5>Continue Reading...</h5>
            </a>
    <?php endwhile;
    else :
        echo '<p>There are no posts!</p>';
    endif;
    ?>
</div>
<?php get_footer() ?>