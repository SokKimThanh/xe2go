<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Carousel</title>
    <link rel="stylesheet" href="./public/css/test.css">
</head>

<body>
    <section class="carousel">
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <div class="slide-carousel">
            <img src="./public/images/trang_gallery/Carousel/1.webp" alt="Image 1">
        </div>
        <div class="slide-carousel">
            <img src="./public/images/trang_gallery/Carousel/2.webp" alt="Image 2">
        </div>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </section>

    <script>
        let currentSlide = 0;
        const slidesCarousel = document.querySelectorAll('.slide-carousel');
        const totalSlidesCarousel = slidesCarousel.length;

        function showSlide(index) {
            slidesCarousel.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }

        function changeSlide(direction) {
            currentSlide = (currentSlide + direction + totalSlidesCarousel) % totalSlidesCarousel;
            showSlide(currentSlide);
        }

        function autoSlide() {
            changeSlide(1);
        }

        //setInterval(autoSlide, 3000); // Change slide every 3 seconds

        // Initial display
        showSlide(currentSlide);
    </script>
</body>

</html>