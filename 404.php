<?php get_header(); ?>
            
            <main class="l-main c-main p-main">
                <article class="l-contents">
                    <section>
                        <div class="l-content--404 p-text--404">
                            <h2>ページが見つかりません</h2>
                            <p>申し訳ございません。お探しのページは存在しないか、削除された可能性があります。</p>
                            <div class="l-card__text-area__button">
                                <button class="c-button--404 p-text--button--404"><a href="<?php echo esc_url( home_url() ); ?>">ホームページに戻る</a></button>
                            </div>
                        </div>
                    </section>
                </article>
                <div class="p-overlay"></div>
            </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>