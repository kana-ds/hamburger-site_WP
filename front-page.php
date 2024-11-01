<?php get_header(); ?>
            
            <main class="l-main c-main">
                <article class="l-contents">
                    <div class="l-main-visual l-main-visual--front-page p-text--main-visual">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual.jpg')); ?>" alt="ハンバーガーの写真">
                        <div class="l-main-visual__title">
                            <h2>ダミーサイト</h2>
                        </div>
                    </div>

                    <div class="l-branch-menu">
                        <ul>
                            <li>
                                <a href="<?php echo esc_url( get_permalink( 212 ) ); ?>">
                                    <div class="l-branch-menu__wrap branch-menu__img01">
                                        <h3><?php echo esc_html( get_the_title( 212 ) ); ?></h3>
                                        <div class="p-box--information">
                                            <dl>
                                                <dt>Take OUT</dt>
                                                <dd>当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dd>
                                            </dl>
                                            <dl>
                                                <dt>Take OUT</dt>
                                                <dd>当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dd>                                        
                                            </dl>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( get_permalink( 214 ) ); ?>">
                                    <div class="l-branch-menu__wrap branch-menu__img02">
                                        <h3><span><?php echo esc_html( get_the_title( 214 ) ); ?></span></h3>
                                        <div class="l-menu-box p-box--information">
                                            <dl>
                                                <dt>Eat In</dt>
                                                <dd>店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dd>
                                            </dl>
                                            <dl>
                                                <dt>Eat In</dt>
                                                <dd>店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <section class="l-access">                        
                        <div class="l-access__map">
                            <img src="<?php echo esc_url( get_theme_file_uri('/images/map.png') ); ?>" alt="地図画像">
                            <div class="l-access__text__wrap">
                                <h3><?php echo esc_html( get_the_title( 237 ) ); ?></h3>
                                <?php
                                // 固定ページIDを指定して内容を取得
                                $content = get_post_field('post_content', 237);

                                // 最初の<p>タグの内容を正規表現で取得
                                if ( preg_match('/<p>(.*?)<\/p>/', $content, $matches) ) {
                                    // 最初の<p>タグの内容を出力
                                    echo '<p>' . wp_kses_post( $matches[1] ) . '</p>';
                                }
                                ?>
                            </div>
                            <div class="l-access__map__overlay"></div>
                        </div>
                    </section>
                </article>
                <div class="p-overlay"></div>
            </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>