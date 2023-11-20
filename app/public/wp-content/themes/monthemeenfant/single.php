<?php get_header('mysingle'); ?> 

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>

                    <h2>
                        <?php the_title(); ?>
                    </h2>

                    <figure>
                        <?php the_post_thumbnail('panoramique'); ?>
                    </figure>

                    <?php the_content(); ?>

                </article>
            <?php endwhile; endif; ?>

<?php get_footer(); //PHP jamais fermé