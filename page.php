<?php
/*
 Template Name: Default Template
 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<div class="container" style="background-color:#fff;">
    
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                  <?php the_content(); ?>

                   <?php endwhile; endif; ?>
</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>