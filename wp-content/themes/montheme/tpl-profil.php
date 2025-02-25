<?php

/**
 * Template Name: Connexion
 */
$user = wp_get_current_user();
if ($user->ID == 0) {
    header('location:login');
}

?>
<?php get_header(); ?>
<div class="container d-flex justify-content-center">
    <h2 class="text-center mb-4">Mes Informations</h2>
</div>

<?php get_footer(); ?>