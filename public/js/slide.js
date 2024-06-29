var slideIndex = 0;
showSlides();

function showSlides() {
    var slides = document.getElementsByClassName("slide");

    // Hide all slides
    for (var i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");  
    }

    // Increment slide index and reset if necessary
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }    

    // Display current slide with a smooth transition
    slides[slideIndex - 1].classList.add("active");

    // Call showSlides function recursively after 3 seconds
    setTimeout(showSlides, 3000); // Change slide every 3 seconds
}
