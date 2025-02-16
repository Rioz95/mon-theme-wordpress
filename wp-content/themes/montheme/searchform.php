<form class="d-flex" role="search" action="<?= esc_url(home_url('/')) ?>">
    <input class="form-control me-2" type="search" name="s" placeholder="Recherche" aria-label="Search" value="<?= get_search_query() ?>">
    <button class="btn btn-outline my-2 my-sm-0" type="submit">Recherche</button>
</form>