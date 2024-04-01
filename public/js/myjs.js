


document.addEventListener('DOMContentLoaded', function () {
    var images = [
        '/images/269713058_427831879049165_7153829545722713717_n.jpeg',
        '/images/pexels-oleksandr-p-2831794.jpg',
        // Add more image URLs as needed
    ];

    var currentIndex = 0;
    var homeSection = document.getElementById('Home');

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
        setInterval(nextBackgroundImage, 4000); // Change every 3 seconds
    }

    startSlideshow(); // Start slideshow on page load

    document.getElementById('prevBtn').addEventListener('click', prevBackgroundImage);
    document.getElementById('nextBtn').addEventListener('click', nextBackgroundImage);
});
