<header class="header">
        <div class="logo">
            <img src="<?php bloginfo('template_directory') ?> \images\logo.jpg">
        </div>
        <div class="nav">
            <?php wp_nav_menu(array('
            theme_location'=>'primary-menu',
            'menu_class'=>'nav'
            )) ?>

          
        </div>
    </header> 