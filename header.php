<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="loader__container">
            <div id="lm"></div>
        </div>
            <div class="header__inner">
                <div class="container header__top">
                    <div class="header__logo">
                        <a href="<?php echo get_home_url()?>" class="header__logo-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="header__right">
                        <div id="menu" class="menu">
                            <nav id="menu__main" class="menu__main">
                                <?php
                                    wp_nav_menu(array(
                                    'theme_location' => 'main',
                                    'container' => 'ul',
                                    'menu_class' => 'header__items'
                                    ));
                                ?>
                            </nav>
                        </div>
                        <div class="header__buttons-container">
                        <div class="header__buttons">
                        <a href="<?php the_field('header__button1', 'option') ?>" class="header__buttons-first"><?php the_field('header__button-text1', 'option') ?></a>
                        <a href="<?php the_field('header__button2', 'option') ?>" class="header__buttons-second"><?php the_field('header__button-text2', 'option') ?></a>
                        </div>
                        <div class="header__langs">
                            <?php
                                function language_selector_flags(){
                                    $languages = icl_get_languages('skip_missing=0&orderby=code');
                                    if(!empty($languages)){
                                        foreach($languages as $l){
                                            if(!$l['active']) echo '<a class="wpml-ls-item" href="'.$l['url'].'">';
                                            echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
                                            if(!$l['active']) echo '</a>';
                                        }
                                    }
                                }
                                language_selector_flags();
                            ?>
                        </div>
                        </div>
                    </div>

                    <div class="menu-btn">
                        <div class="menu-btn__burger">
                    </div>
                </div>
            </div>
    </header>