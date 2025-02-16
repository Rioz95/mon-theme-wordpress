<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php if (get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true) === '1'): ?>
            <div class="alert alert-info">Cet article est sponsorisé</div>
        <?php endif; ?>

        <p>
            <img src="<?php the_post_thumbnail_url() ?>" alt="" style="witdth: 100%; height: auto">
        </p>
        <?php the_content() ?>

        <h2>Articles relatifs</h2>

        <?php
        $query = new WP_Query([
            'post__not_in' => [get_the_ID()],
            'post_type' => 'post',
            'post_per_page' => 3
        ]);
        while ($query->have_posts()): $query->the_post(); ?>
        <?php endwhile; ?>
        ?>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>