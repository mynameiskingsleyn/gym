<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <?php wp_head();     ?>
    </head>
    <body>
        <header class="site-header">
            <?php $temp_url = get_template_directory_uri(); ?>
            <div class="container header-grid">
                <div class="navigation-bar">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo $temp_url.'/img/logo.svg' ?>" alt="logo">
                        </a>

                    </div> <!-- Logo -->
                    <?php
                        $args = [
                             'theme_location' => 'main-menu',
                            'container' => 'nav',
                            'container_class' => 'main-menu'
                        ];
                        wp_nav_menu($args);
                    ?>
                    <!-- TODO: add menu -->
                </div> <!-- Nava bar -->
            </div> <!-- container -->

        </header>
    </body>
</html>