$(document).ready(function() {
    const testimonials = document.querySelector('.testimonials');
    const mySiema = new Siema({
        selector: testimonials,
        duration: 250,
        loop: true
    });

    // listen for keydown event
    setInterval(() => mySiema.next(), 1000)
});