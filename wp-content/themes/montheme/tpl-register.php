<?php

/**
 * Template Name: Connexion
 */
?>
<?php get_header(); ?>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Inscription</h2>

        <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="mb-3">
                <label for="user_login" class="form-label">Votre pseudo</label>
                <input type="text" name="user_login" id="user_login" class="form-control" placeholder="Entrez votre pseudo" required>
            </div>

            <div class="mb-3">
                <label for="user_login" class="form-label">Votre email</label>
                <input type="text" name="user_email" id="user_email" class="form-control" placeholder="Entrez votre pseudo" required>
            </div>

            <div class="mb-3">
                <label for="user_password" class="form-label">Votre mot de passe</label>
                <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Entrez votre mot de passe" required>
            </div>

            <div class="mb-3">
                <label for="user_password" class="form-label">Confirmer votre mot de passe</label>
                <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Entrez votre mot de passe" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>

        <div class="text-center mt-3">
            <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>