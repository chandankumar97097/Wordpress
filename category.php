<?php get_header(); ?>

<section class="volunteer-area">
    <div class="row">
        <div class="container">
            <div class="inner-ban-head">
	            <?php if ( have_posts() ) : ?>
                    <ul class="row align-items-center">
                        <div class="col-md-12">
                            <div class="sroriesdiv">
                                    <header class="archive-header">
                                        <h1 class="archive-title">Category: <?php single_cat_title( '', true ); ?></h1>
                                        <?php  if ( category_description() ) : ?>
                                            <div class="archive-meta">
                                                <?php echo category_description(); ?>
                                            </div>
                                    </header>
                            </div>
                        </div>
                    </ul>
                <?php endif; ?>
                    <ul class="row align-items-center">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="item col-md-6 col-lg-4 my-4">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="storiescard">
                                        <div class="storiesimage">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        </div>
                                        <div class="storiestext">
                                            <h3><?php the_title(); ?></h3>
                                            <div class="storiestime d-flex">
                                                <ul>
                                                    <li><i class="fas fa-clock"></i><?php the_time('d M, Y'); ?></li>
                                                </ul>
                                            </div>
                                            <p>
                                                <?php echo wp_trim_words( get_the_content(), 15, '...' );?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </ul>
                    <?php else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
