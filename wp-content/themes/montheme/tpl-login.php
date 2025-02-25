<?php

/**
 * Template Name: Connexion
 */

$error = false;
if (!empty($_POST)) {
    $user = wp_signon($_POST);
    if (is_wp_error($user)) {
        $error = $user->get_error_message();
    } else {
        header('location:profil');
    }
} else {
    $user = wp_get_current_user();
    if ($user->ID != 0) {
        header('location:profil');
    }
}


?>
<?php get_header(); ?>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Se Connecter</h2>
        <div class="error">
            <?php if ($error): ?>
                <?= $error ?>
            <?php endif; ?>
        </div>
        <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="mb-3">
                <label for="user_login" class="form-label">Votre pseudo</label>
                <input type="text" name="user_login" id="user_login" class="form-control" placeholder="Entrez votre pseudo" required>
            </div>

            <div class="mb-3">
                <label for="user_password" class="form-label">Votre mot de passe</label>
                <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Entrez votre mot de passe" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" value="1" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Se souvenir de moi</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>

        <div class="text-center mt-3">
            <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>