<?php get_header(); ?> 

<div class="container">

           
<h2><?php the_archive_title(); ?></h2>
        <!-- START THE LOOP -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
                <article>
                    <h2>
                        <a href="><?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <figure>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </figure>
                    <p><?php the_excerpt(); ?></p>
                    <button>
                        <a href="<?php the_permalink(); ?>">Lire la suite</a>
                    </button>
                </article>
            <?php endwhile; endif; ?>
            </div>



<?php get_footer(); //PHP jamais fermé