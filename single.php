<?php get_header(); ?>
            
            <main class="l-main c-main p-main">
                <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                <article class="l-contents">
                <div class="l-main-visual l-main-visual--single p-text--main-visual <?php echo esc_attr( !has_post_thumbnail() ? 'no-thumbnail' : '' ); ?>">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    <div class="l-main-visual__title">
                        <h1 class="p-single-heading--h1"><?php echo esc_html( get_the_title() ); ?></h1>
                    </div>
                </div>

                    <section>
                        <div class="l-content--single">
                            <?php the_content(); ?>
                        </div>
                    </section>
                </article>
                <?php endwhile; else : ?>
                    <p>記事はありません。</p>
                <?php endif; ?>
                <div class="p-overlay"></div>
            </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>