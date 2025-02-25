</div>
<hr>
<footer>
    <?php wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'navbar-nav me-auto'
    ]);
    the_widget(Youtubewidget::class, ['title' => 'Salut', 'youtube' => '6jUnspNCtY0']);
    ?>
</footer>

<?php wp_footer(); ?>
</body>

</html>