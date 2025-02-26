document.addEventListener('scroll', function() {
    const navbar = document.querySelector('.nav'); 
    const scrollOffset = 50; 

    if (window.scrollY > scrollOffset) {
        navbar.classList.add('blurred'); 
    } else {
        navbar.classList.remove('blurred'); 
    }
});

window.addEventListener('load', () => {
    window.scrollTo(0, 0); 
});

document.addEventListener("DOMContentLoaded", function () {
    // Sélection des boutons
    const btnConnexion = document.getElementById("btnConnexion");
    const btnInscription = document.getElementById("btnInscription");

    function appelerRoute(url) {
        fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(response => response.json())
        .then(data => console.log("Réponse reçue:", data))
        .catch(error => console.error("Erreur:", error));
    }

    if (btnConnexion) {
        btnConnexion.addEventListener("click", function () {
            appelerRoute("connexion");
        });
    }

    if (btnInscription) {
        btnInscription.addEventListener("click", function () {
            appelerRoute("inscription");
        });
    }
});








