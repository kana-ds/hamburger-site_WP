<aside class="l-sidebar c-sidebar">
                <button class="l-menu-button--close p-menu-button--close js-hamburger">
                    <span class="p-menu-button--close__text"></span>
                </button>
                <nav class="l-sidebar__nav">
                    <h3>Menu</h3>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main_menu',
                                'container' => false,
                                'menu_class' => '',
                                'items_wrap' => '<ul>%3$s</ul>', // 余計なクラスやIDを排除
                            )
                        );
                    ?>
                </nav>
            </aside>