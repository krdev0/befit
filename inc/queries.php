<?php

function befit_classes_list()
{ ?>
    <ul class="classes-list">
        <?php $args = array(
            'post_type' => 'befit_clases'
        );

        $classes = new WP_Query($args);

        while ($classes->have_posts()) : $classes->the_post(); ?>

            <li class="gym-class card gradient">
                <?php the_post_thumbnail('befitMedium'); ?>

                <div class="card-content">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>

                    <?php
                    $start_time = get_field('start_time');
                    $end_time = get_field('end_time');
                    ?>

                    <p><?php the_field('class_info'); ?> - <?php echo $start_time . " to " . $end_time; ?></p>

                </div>

            </li>

        <?php endwhile;
        wp_reset_postdata(); ?>
    </ul>

<?php }
