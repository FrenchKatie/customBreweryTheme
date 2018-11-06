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




        <?php $IntroTitleText = get_theme_mod('home_intro_title_text_setting'); ?>
        <?php $IntroText = get_theme_mod('home_intro_text_setting'); ?>
        <?php if(strlen($IntroTitleText) > 0): ?>
            <div class="row">
                <div class="col text-center pt-5 pb-5">
                    <h2 class="home-intro-title-text"><?php echo get_theme_mod('home_intro_title_text_setting'); ?></h2>
                </div>
            </div>
            <?php if(strlen($IntroText) > 0): ?>
                <div class="row">
                    <div class="col text-center pb-5">
                        <p class="home-intro-text"><?php echo get_theme_mod('home_intro_text_setting'); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>

















        <?php $FeatureImage = get_theme_mod('home_feature_image_setting'); ?>
        <?php if(strlen($FeatureImage) > 0): ?>
            <div class="row mt-5 justify-content-center">
                <div class="col-4 text-center">
                    <img class="home-feature-image w-100 p-4" src="<?php echo get_theme_mod('home_feature_image_setting'); ?>">
                </div>
                <div class="col-5 p-4">
                    <h2 class="home-feature-image-title-text"><?php echo get_theme_mod('home_feature_image_title_text_setting'); ?></h2>
                    <p class="home-feature-image-text pr-4 pt-3"><?php echo get_theme_mod('home_feature_image_text_setting'); ?></p>
                </div>
            </div>
        <?php endif; ?>





















        <?php if(is_active_sidebar('front_page_sidebar')): ?>
            <div class="col-4">
                <div id"frontSidebar"=>
                    <?php dynamic_sidebar('front_page_sidebar'); ?>
                </div>
            </div>
        <?php endif; ?>
<?php get_footer(); ?>
