<?php
/**
 * The template for displaying archive pages.
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
		if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="gamma heading--main page-title">Judges</h1>
				<p>The 2016 coventry Telegraph Business Awards judges are:</p>
			</header><!-- .page-header -->

	<ul class="judges judges__columns list">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>

			<li class="block judges-item box">
			  <a href="<?php echo esc_url( get_permalink() ); ?>">
			    <?php if ( has_post_thumbnail() ) { ?>
					<figure>
			    <?php
			    the_post_thumbnail(
			    	'profile-judge',
			    	array(
			    		'class' => 'image image__responsive',
			    	)
			    ); ?>
			      <!--<img class="image image__responsive" src="<?php echo esc_url( get_permalink() ); ?>" alt="Profile photo of <?php the_title(); ?>">-->
			      <figcaption class="gamma judge__name"><?php the_title(); ?></figcaption>
			    </figure>
			    <?php } ?>
			  </a>
			</li>

		<?php endwhile; ?>

			</ul>
	<?php else :

			get_template_part( 'content-parts/content', 'none' );

		endif; ?>

		    </article>

		    <aside class="content__aside ss1-ss4 ms1-ms6 ls9-ls12">
				<?php get_sidebar(); ?>
		    <aside>

		  </div>
		</main>

	</div><!-- #primary -->

<?php

get_footer();
