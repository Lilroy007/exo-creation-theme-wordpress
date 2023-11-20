<?php
/*
Template Name: Equipe (liste)
*/
get_header(); 

//Arguments 
$args = array(
    'post_type' => 'team',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC',
);
$query = new WP_Query($args);
?>
<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
<article id="member-<?php the_ID(); ?>"class="member">
   <figure class="media">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('large'); ?>
    </a>
    </figure>

<h2 class="name">
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
</h2>

<p class="excerpt">
    <?php the_excerpt(); ?>
</p>

<?php endwhile; endif; ?>

<?php get_footer(); 