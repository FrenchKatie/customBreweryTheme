<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Custom Brewery Wordpress Website</title>
        <?php wp_head(); ?>
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Noto+Sans" rel="stylesheet">
    </head>
    <body>

        <?php
           $custom_logo = get_theme_mod('custom_logo');
           $logo_url = wp_get_attachment_image_url($custom_logo, 'medium');
         ?>
         <?php if($custom_logo): ?>
            <a class="navbar-brand w-100" href="#">
                <img class="mx-auto d-block" src="<?= $logo_url  ?>" height="150" alt="">
            </a>
        <?php else: ?>
            <a class="navbar-brand" href="#"><?= bloginfo('name');  ?></a>
        <?php endif; ?>


        <!-- <h6>This is coming from the header.php file</h6> -->
        <nav class="navbar navbar-expand-md" role="navigation">
              <div class="container">
                	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                		<span class="navbar-toggler-icon"></span>
                	</button>

            		<?php
                		wp_nav_menu( array(
                			'theme_location'    => 'header_nav',
                			'depth'             => 2,
                			'container'         => 'div',
                			'container_class'   => 'collapse navbar-collapse ',
                			'container_id'      => 'bs-example-navbar-collapse-1',
                			'menu_class'        => 'nav navbar-nav justify-content-around w-100',
                			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                			'walker'            => new WP_Bootstrap_Navwalker()
                		) );
            		?>
            	</div>
            </nav>

            
