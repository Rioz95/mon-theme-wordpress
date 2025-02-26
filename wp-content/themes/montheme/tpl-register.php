<?php

/**
 * Template Name: Connexion
 */
$error = false;

if (!empty($_POST)) {
    $d = $_POST;

    if ($d['user_pass'] !== $d['user_pass2']) {
        $error = 'Les deux mots de passe ne correspondent pas.';
    } elseif (!is_email($d['user_email'])) {
        $error = 'Veuillez entrer un email valide.';
    } else {
        $userb = wp_insert_user([
            'user_login' => $d['user_login'],
            'user_pass' => $d['user_pass'],
            'user_email' => $d['user_email']
        ]);

        if (is_wp_error($userb)) {
            $error = $userb->get_error_message();
        } else {
            add_user_meta($userb, 'cp', $d['cp']);

            $msg = 'Vous êtes bien inscrit.';
            $headers = 'From: ' . get_option('admin_email') . "\r\n";
            wp_mail($d['user_email'], 'Inscription réussie', $msg, $headers);

            wp_signon();
            header('Location: profil');
            exit();
        }
    }
}
?>

<?php get_header(); ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Inscription</h2>

        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="mb-3">
                <label for="user_login" class="form-label">Votre pseudo</label>
                <input type="text" name="user_login" id="user_login" class="form-control"
                    value="<?= isset($d['user_login']) ? esc_attr($d['user_login']) : ''; ?>"
                    placeholder="Entrez votre pseudo" required>
            </div>

            <div class="mb-3">
                <label for="user_email" class="form-label">Votre email</label>
                <input type="email" name="user_email" id="user_email" class="form-control"
                    value="<?= isset($d['user_email']) ? esc_attr($d['user_email']) : ''; ?>"
                    placeholder="Entrez votre email" required>
            </div>

            <div class="mb-3">
                <label for="user_pass" class="form-label">Votre mot de passe</label>
                <input type="password" name="user_pass" id="user_pass" class="form-control"
                    placeholder="Entrez votre mot de passe" required>
            </div>

            <div class="mb-3">
                <label for="user_pass2" class="form-label">Confirmer votre mot de passe</label>
                <input type="password" name="user_pass2" id="user_pass2" class="form-control"
                    placeholder="Confirmez votre mot de passe" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
        </form>
    </div>
</div>

<?php get_footer(); ?>