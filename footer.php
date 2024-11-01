<footer class="l-footer c-footer p-text--footer">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/footer.jpg')); ?>" alt="フッター画像">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer_menu',
                            'container' => false,
                            'menu_class' => 'l-footer__menu p-text--footer__menu',
                        )
                    );
                ?>
                <small class="l-footer__copyright p-text--footer__copyright"><?php echo esc_html('Copyright: RaiseTech'); ?></small>
            </footer>
        </div>
<?php wp_footer(); ?>
    </body>
</html>