<?php get_header(); ?>
<?php
    if (have_posts() ) :
        while(have_posts() ) : the_post();
?>
    <div class="l-archive__main p-archive__main">
        <div class="p-archive__main__img-block">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="p-archive-main__text-block">
            <h3 class="p-archive-main__text-title"><?php the_title(); ?></h3>
        </div>
    </div>
<?php
        endwhile;
    endif;
?>
<?php get_footer(); ?>