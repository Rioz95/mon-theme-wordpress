<?php

/**
 * Template Name: Connexion
 */
$user = wp_get_current_user();
if ($user->ID == 0) {
    header('location:login');
}
if (!empty($_POST['age'])) {
    update_user_meta(get_current_user_id(), 'age', $_POST['age']);
}


?>
<?php get_header(); ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Mes Informations</h1>

    <div class="card shadow-lg p-4 rounded-4 mx-auto" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-3">Modifier votre âge</h2>

        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
            <div class="mb-3">
                <label for="age" class="form-label">Votre âge</label>
                <input type="text" name="age" id="age" class="form-control"
                    value="<?php echo get_user_meta(get_current_user_id(), 'age', true); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Modifier</button>
        </form>
    </div>
</div>


<?php get_footer(); ?>