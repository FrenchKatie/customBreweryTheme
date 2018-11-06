<?php get_header(); ?>
        <!-- <h1>Welcome to your new Wordpress website</h1> -->
        <!-- <p>This page is rendererd through the front-page.php file</p> -->
        <?php
            if(get_header_image() == false){
                $bannerImage = get_template_directory_uri() . '/assets/images/default.jpg';
            } else {
                $bannerImage = get_header_image();
            }
        ?>

        <?php if(get_header_image()): ?>
            <div id="front-page-banner" class="bg-dark" style="background-image: url(<?= $bannerImage; ?>);">

            </div>
        <?php endif; ?>
<?php get_footer(); ?>
