<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="text-center text-primary"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) :  ?>
            <?php the_post_thumbnail('befitMedium', array('class' => 'featured-image')); ?>
        <?php endif; ?>

        <div class="content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>
<?php endif; ?>