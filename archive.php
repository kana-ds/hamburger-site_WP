<?php get_header(); ?>
            
            <main class="l-main c-main">
                <article class="l-contents">
                    <div class="l-main-visual l-main-visual--archive p-text--main-visual">
                        <div class="p-overlay--archive"></div>
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/branch-menu_img01.jpg')); ?>" alt="チーズバーガーの写真">
                        <div class="l-main-visual__title">
                            <h2>Menu:</h2>
                            <p><?php echo esc_html( single_cat_title('', false) ); ?></p>
                        </div>
                    </div>

                    <section>
                        <div class="l-content--archive">
                            <div class="l-content-block p-text--content-block">
                                <h3>小見出しが入ります</h3>
                                <p>
                                    <?php
                                    if( is_category() && category_description() ) {
                                        echo wp_kses_post(category_description());
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
                            <div class="l-card c-card p-card">
                                <div class="c-card__image">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/no-image.jpg')); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="l-card__text-area c-card__text-area p-text--card">
                                    <h3><?php echo esc_html( get_the_title()); ?></h3>
                                    <?php 
                                        // 投稿の本文を取得
                                        $content = get_the_content();

                                        // 最初のh2タグの内容を取得して表示
                                        if ( preg_match('/<h2[^>]*>(.*?)<\/h2>/', $content, $matches_h2) ) {
                                            $h2_content = $matches_h2[1];
                                            echo '<h4>' . esc_html( $h2_content ) . '</h4>';  // h2タグを<h4>に変換して表示
                                        }

                                        // 本文から最初のh2タグを削除
                                        $content_without_h2 = preg_replace('/<h2[^>]*>.*?<\/h2>/', '', $content);

                                        // h2を除いた後の本文を抜粋として表示
                                        echo '<p>' . esc_html( wp_trim_words( $content_without_h2, 100 ) ) . '</p>'; // 100単語の抜粋を表示
                                    ?>
                                    <div class="l-card__text-area__button">
                                        <a class="c-button--card p-text--button" href="<?php echo esc_url(get_permalink()); ?>">詳しく見る</a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; else : ?>
                                <p>記事はありません。</p>
                            <?php endif; ?>
                        </div>
                    </section>

                    <?php
                        global $wp_query;

                        // 現在のページと総ページ数を取得
                        $current_page = max( 1, get_query_var( 'paged' ) );
                        $total_pages = $wp_query->max_num_pages;

                        if ( $total_pages > 1 ) {
                            echo '<nav class="l-navbar">';
                            echo '<ul class="l-pagination p-text--pagination">';

                            // ページ数表示部分
                            echo '<li class="l-pagination--tab">';
                            echo '<a href="#">page ' . esc_html($current_page) . '/' . esc_html($total_pages) . '</a>';
                            echo '</li>';

                            // ページネーションリンク生成
                            echo paginate_links( array(
                                'mid_size'  => 1,
                                'prev_text' => '<img src="' . esc_url( get_theme_file_uri('/images/arrow_img01.png') ) . '" alt="矢印"><span class="l-pagination--sma">前へ</span>',
                                'next_text' => '<span class="l-pagination--sma">次へ</span><img src="' . esc_url( get_theme_file_uri('/images/arrow_img02.png') ) . '" alt="矢印">',
                                'before_page_number' => '<li class="l-pagination__no c-page">',
                                'after_page_number'  => '</li>',
                                'current' => $current_page,  // 現在のページ番号を設定
                            ) );

                            echo '</ul>';
                            echo '</nav>';
                        }
                    ?>
                </article>
                <div class="p-overlay"></div>
            </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>