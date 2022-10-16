<ul class="blog-entries">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="card gradient">
                <?php the_post_thumbnail('befitMedium'); ?>

                <?php the_category(); ?>

                <div class="card-content">
                    <a class="blog-title" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>

                    <p class="date-published meta">
                        <span>Date published:</span>
                        <?php the_time(get_option('date_format')); ?>
                    </p>

                    <p class="post-author">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <span>Written By:</span>
                            <?php echo get_the_author_meta('display_name') ?>
                        </a>
                    </p>
                </div>
            </li>
        <?php endwhile; ?>
    <?php endif; ?>
</ul>