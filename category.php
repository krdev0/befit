<?php get_header(); ?>

<main class="container page section classes-index">
    <?php 
        $category = get_queried_object();
    ?>
    <h2 class="text-center text-primary">Category: <?php echo $category->name; ?></h2>
    <p class="text-center"><?php echo $category->description; ?></p>
    
    <?php get_template_part('parts/blog', 'loop'); ?>

</main>

<?php get_footer(); ?>