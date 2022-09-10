<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="text-center text-primary"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) :  ?>
            <?php the_post_thumbnail('befitMedium', array('class' => 'featured-image')); ?>
        <?php endif; ?>

        <?php if (get_post_type() === 'class') : ?>
            <?php
            $start_time = get_field('start_time');
            $end_time = get_field('end_time');
            ?>

            <p class="content-time"><?php the_field('class_info'); ?> - <?php echo $start_time . " to " . $end_time; ?></p>
        <?php endif; ?>

        <div class="content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>
<?php endif; ?>