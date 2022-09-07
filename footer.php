<?php wp_footer(); ?>

<footer class="site-footer container">
    <div class="footer-content">
        <?php wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'footer-menu'
        )); ?>

        <p class="copyright">All Rights Reserved. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
    </div>
</footer>
</body>

</html>