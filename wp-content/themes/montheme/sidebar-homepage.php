<?php if (!dynamic_sidebar('homepage')): ?>
    <div class="p-4">
        <h4 class="fst-italic">Rechercher</h4>
        <?= get_search_form() ?>
    </div>
    <div class="p-4">
        <h4 class="fst-italic">Archives</h4>
        <ul class="list-unstyled">
            <?php wp_get_archives(['type' => 'monthly']) ?>
        </ul>
    </div>
<?php endif; ?>