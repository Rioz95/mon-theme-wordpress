<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

        <p>
            <img src="<?php the_post_thumbnail_url() ?>" alt="" style="witdth: 100%; height: auto">
        </p>
        <?php the_content() ?>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>