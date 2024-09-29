function openTabWithDelay (delay) {
    event.preventDefault(); // Empêche le comportement par défaut du lien
    document.getElementById('loader').style.display = 'block'; // Affiche l'animation

    setTimeout(function() {
        document.getElementById('loader').style.display = 'none'; // Masque l'animation
        window.open("/", '_blank'); // Ouvre le nouvel onglet après le délai
    }, delay);
}