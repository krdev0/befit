<?php get_header(); ?>

<main class="container page section classes-index">
    <h1>Our Blog</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore laborum autem iusto pariatur eveniet sapiente commodi, animi suscipit deleniti ullam iure culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam officia voluptates autem sequi aspernatur nihil minus distinctio, commodi veritatis excepturi neque voluptatibus dolores labore perferendis officiis dolore quo, aliquam tempore ducimus. Dolorem.</p>
    <ul class="blog-entries">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="card gradient">
                    <?php the_post_thumbnail('befitMedium'); ?>
                    <div class="card-content">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>

                        <p class="meta">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                <span>By:</span>
                                <?php echo get_the_author_meta('display_name') ?>
                            </a>
                        </p>

                        <p class="date-published">
                            <?php the_time(get_option('date_format')); ?>
                        </p>
                    </div>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>

</main>

<?php get_footer(); ?>