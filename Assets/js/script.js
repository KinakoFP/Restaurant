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







