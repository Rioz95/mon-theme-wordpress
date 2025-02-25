<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'navbar-nav me-auto'
                ]) ?>
                <!--  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul> -->
                <?= get_search_form() ?>
            </div>
            <div class="social">
                <?php $user = wp_get_current_user(); ?>
                <?php if ($user->ID == 0): ?>
                    <a href="<?= bloginfo('url'); ?>/login" class="btn btn-primary" style="text-decoration: none; color: white;">Se connecter</a>
                    <a href="<?= bloginfo('url'); ?>/register" class="btn btn-primary" style="text-decoration: none; color: white;">S'inscrire</a>
                <?php else:  ?>
                    Salut <?= $user->user_login; ?>
                    <a href="<?= bloginfo('url'); ?>/profil" class="btn btn-primary"
                        style="text-decoration: none; color: white;">Mon profil</a> |
                    <a href="<?= bloginfo('url'); ?>/logout" class="btn btn-primary" style="text-decoration: none; color: white;">Se deconnecter</a>

                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container">