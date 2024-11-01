<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="おいしいハンバーガーのお店">
        <?php if( is_user_logged_in() ): ?>
            <style type="text/css">
                @media (max-width: 1280px) {
                    body.admin-bar #wpadminbar {
                        position: fixed;
                        top: 0;
                    }
                    .l-sidebar, .p-menu-button {
                        margin-top: 3.2rem;
                    }
                }
                @media (max-width: 768px) {
                    .l-sidebar, .p-menu-button {
                        margin-top: 4.6rem;
                    }
                }

            </style>
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div class="l-container c-container">
            <header class="l-header p-text--header">
                <div class="l-header__contents">
                <button class="l-menu-button p-menu-button p-text--menu-button js-hamburger">
                    <span class="p-menu-button__text">Menu</span>
                </button>
                    <h1><a href="<?php echo esc_url(home_url('/')); ?>">Hamburger</a></h1>
                    <?php get_search_form(); ?>
                </div>
            </header>