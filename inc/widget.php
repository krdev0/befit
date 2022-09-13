<?php

class Befit_Classes_Widget extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    function __construct()
    {
        parent::__construct(
            'befit_classes', // Base ID
            esc_html__('Befit - Classes List', 'text_domain'), // Name
            array('description' => esc_html__('Displays list of available classess', 'text_domain'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
?>

        <ul class="sidebar-class-list">
            <?php
            $args = array(
                'post_type' => 'class',
            );

            $classes = new WP_Query($args);
            while ($classes->have_posts()) : $classes->the_post();
                $start_time = get_field('start_time');
                $end_time = get_field('end_time');
            ?>
                <li class="class">
                    <div class="widget-image">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="widget-content">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="text-primary"><?php the_title(); ?></h3>
                        </a>

                        <p><?php the_field('class_info'); ?> - <?php echo $start_time . " to " . $end_time; ?></p>
                    </div>
                </li>

            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>

    <?php echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('New title', 'text_domain');
    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';

        return $instance;
    }
}

add_action('widgets_init', function () {
    register_widget('Befit_Classes_Widget');
});
