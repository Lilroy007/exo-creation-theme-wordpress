<?php get_header(); ?>

<!-- START THE LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>

                    <h2>
                        <?php the_title(); ?>
                    </h2>

                    <figure>
                        <?php the_post_thumbnail('large'); ?>
                    </figure>

                    <?php the_content(); ?>

                </article>
            <?php endwhile; endif; ?>
        <!-- END THE LOOP -->

<?php get_footer();
