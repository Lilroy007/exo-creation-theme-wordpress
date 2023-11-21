<?php get_header(); ?>

<article class="post">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               

    <h2>
        <?php the_title(); ?>
    </h2>
   
        
<figure>
    <?php the_post_thumbnail('large'); ?>
</figure>

<?php the_content(); ?>

    <?php if (get_field('member_e-mail')) : ?>
    <p class="email">
        <?php the_field('member_e-mail'); ?>
    </p>
    <?php endif; ?>
    <?php if (get_field('member_phone')) : ?>
    <p class="email">
        <?php the_field('member_phone'); ?>
    </p>

<?php endif; ?>

<?php 
$colleagues = get_field('member_colleagues'); 
if ($colleagues) : 
?>

<div class="colleagues">
    <p>Les collaborateurs de <?php the_title(); ?> :</p>
    <?php 
    foreach ($colleagues as $post) : 
    setup_postdata($post);
    ?>

    <div><?php the_title(); ?></div>

    <?php endforeach; wp_reset_postdata(); ?>
</div>

<?php endif; ?>
                
<?php endwhile; endif; ?>
</article>         

<?php get_footer();