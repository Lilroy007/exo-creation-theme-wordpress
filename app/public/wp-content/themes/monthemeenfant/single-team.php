<?php get_header(); ?>

<article class="post">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               

    <h2>
        <?php the_title(); ?>
    </h2>

        
    <?php endwhile; endif; ?>


</article>
           

<?php get_footer();