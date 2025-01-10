document.addEventListener('DOMContentLoaded', function () {

    const scrollLink = document.getElementById('scroll-down-link');
    if (scrollLink) {
        scrollLink.addEventListener('click', function() {
            window.scrollBy({
                top: window.innerHeight,
                behavior: 'smooth'
            });
        });
    }

});

