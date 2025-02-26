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
    const registerBtn = document.getElementById("registerBtn");

    if (registerBtn) {
        registerBtn.addEventListener("click", function () {
            window.location.href = "../View/register.php";
        });
    }
});

document.addEventListener("DOMContentLoaded", function () { 
    const loginBtn = document.getElementById("loginBtn");

    if (loginBtn) {
        loginBtn.addEventListener("click", function () {
            window.location.href = "../View/login.php";
        });
    }
});









