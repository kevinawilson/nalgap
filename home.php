<?php
/*
Template Name: Home
*/

get_header(); ?>

	<div class="content">

		<div class="inner-content grid-x">

		    <main class="main small-12 medium-12 large-12 cell" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

				    <section class="entry-content" itemprop="articleBody">
						    <?php the_content(); ?>
						</section> <!-- end article section -->

					</article> <!-- end article -->

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
