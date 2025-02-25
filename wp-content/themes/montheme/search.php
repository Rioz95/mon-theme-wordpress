<?php get_header(); ?>

<form action="" class="form-inline">

    <input class="form-control mb-2 mr-sm-2" type="search" name="s" value="<?= get_search_query() ?>" placeholder="Votre recherche">

    <div class="form-check mb-2 mr-sm-2">
        <input class="form-check-input" type="checkbox" id="inlineFormCheck" value="1" name="sponso" <?= checked('1', get_query_var('sponso')) ?>>
        <label class="form-check-label" for="inlineFormCheck">Article sponsorisé seulement/label>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Recherche</button>
</form>

<h1>Resultat pour votre recherche <?= get_search_query() ?></h1>

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