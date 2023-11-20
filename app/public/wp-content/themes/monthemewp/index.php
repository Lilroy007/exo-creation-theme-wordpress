
<?php get_header(); ?> 

        <!-- START THE LOOP -->
        <div class="container">

            <ul>
            <?php
            $terms = get_terms(); // récupère tous les termes de la taxonomie return array
            //var_dump($terms);
            foreach ($terms as $term) :
                $term_name = $term->name;
                $term_id = $term->term_id; 
                $term_link = get_term_link($term_id);

    
        ?> 
            <li>
                <a href="<?php echo $term_link; ?>">
                <?php echo $term_name; ?>
                </a>
            </li>


        <?php endforeach; ?>
            </ul>

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
        <!-- END THE LOOP -->

<?php get_footer(); //PHP jamais fermé
