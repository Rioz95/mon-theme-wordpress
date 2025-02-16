<?php get_header(); ?>

<h1>Voir tout nos biens</h1>

<?php if (have_posts()): ?>
    <div class="row my-5">
        <?php while (have_posts()): the_post() ?>
            <div class="col-sm-4">
                <?php get_template_part('parts/card', 'post'); ?>
            </div>
        <?php endwhile; ?>
    </div>

    <?php monttheme_pagination(); ?>

<?php else: ?>
    <h1>Pas d'article</h1>
<?php endif; ?>
<?php get_footer(); ?>