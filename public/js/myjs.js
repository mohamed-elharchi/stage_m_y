document.addEventListener('DOMContentLoaded', function () {
    var images = [
        '/images/269713058_427831879049165_7153829545722713717_n.jpeg',
        '/images/pexels-oleksandr-p-2831794.jpg',
        // Add more image URLs as needed
    ];

    var currentIndex = 0;
    var homeSection = document.getElementById('acceuil');

    function changeBackgroundImage() {
        homeSection.style.backgroundImage = "url('" + images[currentIndex] + "')";
    }

    // Set initial background image
    changeBackgroundImage();

    function nextBackgroundImage() {
        currentIndex = (currentIndex + 1) % images.length;
        changeBackgroundImage();
    }

    function prevBackgroundImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        changeBackgroundImage();
    }

    function startSlideshow() {
        setInterval(nextBackgroundImage, 4000); // Change every 4 seconds
    }

    startSlideshow(); // Start slideshow on page load

    document.getElementById('prevBtn').addEventListener('click', prevBackgroundImage);
    document.getElementById('nextBtn').addEventListener('click', nextBackgroundImage);

    const scrollUp = () => {
        const scrollUp = document.getElementById('scroll-up');
        if (window.scrollY >= 350) {
            scrollUp.classList.add('show-scroll');
        } else {
            scrollUp.classList.remove('show-scroll');
        }
    };

    window.addEventListener('scroll', scrollUp);

    const msgeButton = document.querySelector(".togle");
    const discussionBox = document.querySelector(".discussion");

    msgeButton.addEventListener('click', () => {
        discussionBox.classList.toggle('active');
    });
});


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    if (slides[slideIndex - 1]) {
        slides[slideIndex - 1].style.display = "block";
    }
    if (dots[slideIndex - 1]) {
        dots[slideIndex - 1].className += " active";
    }


}

