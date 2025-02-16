<?php get_header(); ?>

<?php $sports = get_terms(['taxonomy' => 'sport']) ?>

<ul class="nav nav-pills">
    <?php foreach ($sports as $sport): ?>
        <li class="nav-item">
            <a href="<?= get_term_link($sport) ?>" class="nav-link <?= is_tax('sport', $sport->term_id) ? 'active' : '' ?>"><?= $sport->name ?></a>
        </li>
    <?php endforeach; ?>
</ul>

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