<?php get_header(); ?>
    <main class="l-single-main p-single-main">
        <h2 class="p-single-main__title"><?php the_title(); ?></h2>
        <div class="p-toppage__visual">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php the_content(); ?>
    </main>
<?php get_footer(); ?>