<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>

    <header class="site-header">

        <div class="container header-grid">
            <div class="navigation">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">Befit Theme</a>
                </div>


                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'main-menu'
                )); ?>
            </div>
        </div>

    </header>