<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- <h2><?php the_title(); ?></h2> -->
        <p><?php the_content(); ?></p>

</article><!-- #post-<?php the_ID(); ?> -->