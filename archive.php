<?php get_header(); ?>
    <h2 class="p-archive__main-title-logo">Works</h2>
    <div class="l-archive__main p-archive__main">
        <?php
            if (have_posts() ) :
                while(have_posts() ) : the_post();
        ?>
        <section class="p-archive__main-box">
            <div class="p-archive__main__img-block">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <h3 class="p-archive__main-title"><?php the_title(); ?></h3>
            <div class="p-archive-main__text-block">
                <a href="<?php the_permalink(); ?>">詳しく見る</a>
            </div>
        </section>
        <?php
                endwhile;
            endif;
        ?>
        <!-- <?php wp_link_pages( $args ); ?> -->
    </div>
<?php get_footer(); ?>