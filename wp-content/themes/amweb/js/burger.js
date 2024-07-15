console.log("Le fichier burger.js fonctionne");

document.addEventListener('DOMContentLoaded', function() {
    const openBtn = document.getElementById('openBtn');
    const closeBtn = document.getElementById('closeBtn');
    const topnav = document.querySelector('.header_menu');

    if (!openBtn || !closeBtn || !topnav) {
        console.error('Un ou plusieurs éléments HTML requis sont manquants.');
        return;
    }

    function openMenu() {
        topnav.classList.add('active');
        openBtn.style.display = 'none';
        closeBtn.style.display = 'block';
    }

    function closeMenu() {
        topnav.classList.remove('active');
        openBtn.style.display = 'block';
        closeBtn.style.display = 'none';
    }

    openBtn.addEventListener('click', (e) => {
        e.preventDefault();
        openMenu();
    });

    closeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        closeMenu();
    });

    function checkWindowSize() {
        if (window.innerWidth <= 950) {
            openBtn.style.display = 'block';
            closeBtn.style.display = 'none';
            topnav.classList.remove('active');
        } else {
            openBtn.style.display = 'none';
            closeBtn.style.display = 'none';
            topnav.classList.remove('active');
        }
    }

    window.addEventListener('resize', () => {
        checkWindowSize();
    });

    checkWindowSize();
});