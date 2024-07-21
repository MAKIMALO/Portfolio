console.log("Le fichier burger.js fonctionne");

document.addEventListener('DOMContentLoaded', function() {
    const openBtn = document.getElementById('openBtn');
    const closeBtn = document.getElementById('closeBtn');
    const headerMenu = document.querySelector('.header_menu');
    const menuLinks = headerMenu.querySelectorAll('#menu-header a');

    // Ouvrir le menu
    openBtn.addEventListener('click', function(e) {
        e.preventDefault();
        headerMenu.classList.add('open');
    });

    // Fermer le menu
    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        headerMenu.classList.remove('open');
    });

    // Fermer le menu lorsque l'on clique sur un lien du menu
    menuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            headerMenu.classList.remove('open');
        });
    });

    // Assurez-vous que le menu se ferme si on clique en dehors de celui-ci
    document.addEventListener('click', function(event) {
        if (!headerMenu.contains(event.target) && !openBtn.contains(event.target) && !closeBtn.contains(event.target) && headerMenu.classList.contains('open')) {
            headerMenu.classList.remove('open');
        }
    });
});