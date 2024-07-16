console.log("Le fichier burger.js fonctionne");

document.addEventListener('DOMContentLoaded', function() {
    const openBtn = document.getElementById('openBtn');
    const closeBtn = document.getElementById('closeBtn');
    const headerMenu = document.querySelector('.header_menu');

    openBtn.addEventListener('click', function(e) {
        e.preventDefault();
        headerMenu.classList.add('open');
    });

    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        headerMenu.classList.remove('open');
    });
});