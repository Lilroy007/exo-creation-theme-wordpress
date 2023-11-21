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
<div>
<?php
$services = get_terms('services');
//var_dump($services);
if ($services) : 
?>

<ul class="services">
    <?php foreach ($services as $service) : 
    $service_name = $service->name;
    $service_id = $service->term_id;
    $service_link = get_term_link($service_id); 
    ?>
    <li>
        <a href="<?php echo $service_link; ?>">
        <?php echo $service->name; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>

<?php endif; ?>

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

</article>

<?php endwhile; endif; wp_reset_postdata(); ?>


</div>
<?php get_footer(); 