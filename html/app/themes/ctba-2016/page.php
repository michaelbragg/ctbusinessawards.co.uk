<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ctba-2016
 */

get_header(); ?>

	<div id="primary" class="content-area">

	<main id="main" class="box__large content__main wrapper cf" role="main">
  <div class="wrapper__sub">
    <article class="content__main ss1-ss4 ms1-ms6 ls1-ls8 separator">
      <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
    </article>

    <aside class="content__aside ss1-ss4 ms1-ms6 ls9-ls12">
      <?php get_sidebar(); ?>
    <aside>

  </div>
</main>

	</div><!-- #primary -->

<?php

get_footer();
