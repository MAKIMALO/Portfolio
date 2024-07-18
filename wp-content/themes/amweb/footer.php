<footer>
    <div class="footer_site_menu">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'container' => 'false'
            )
        );
        ?>
    </div>
    <div class="footer-additional-info">
        <p>Copyright ©2024 AMC-web – Tous droits réservés</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>