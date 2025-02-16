<?php

class AgenceMenuPage
{
    public static function register()
    {
        add_action('admin_menu', [self::class, 'addMenu']);
    }

    public static function addMenu()
    {
        add_options_page("Gestion de l'agence", "Agence", "manage_options", 'agence_options', [self::class, 'render']);
    }

    public static function render()
    {
?>
        <h1>Gestion de l'agence</h1>
<?php
    }
}
