<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AM web : Créateur de site internet</title>
    <meta name="description" content="En tant que développeur WordPress, j'ai conçu la société AM web qui est spécialisée dans la création de site internet" />
    <?php wp_head(); ?>

</head>

<body>

<?php wp_body_open(); ?>

    <header id="header_site_menu">
        <nav class="navbar">
            <div class="logo">
                <a href="http://localhost/portfolio/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="Logo AM2C web">
                </a>
            </div>
            <div class="header_menu" role="navigation" aria-label="<?php _e('Menu principal', 'text-domain'); ?>">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'container' => 'false',
                        'walker' => new AMweb_Walker_Nav_Menu()
                    )
                ); ?>
                <a id="openBtn" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/burger_menu.png" alt="Logo burger menu">
                </a>
                <a id="closeBtn" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_btn.png" alt="Croix de fermeture du burger menu">
                </a>
            </div>
        </nav>
    </header>

</body>
</html>