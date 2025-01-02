<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Image Slider</title>
    <style>
        /* Add some basic styling */
        .slider {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin: auto;
            overflow: hidden;
            border: 2px solid #ddd;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slides img {
            width: 100%;
            border: none;
        }

        .prev,
        .next {
            position: absolute;
            top: 50%;
            width: auto;
            padding: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: white;
            font-weight: bold;
            font-size: 18px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }
    </style>
</head>

<body>
    <div class="slider">
        <div class="slides">
            <img src="./public/images/testPic/1.png" alt="Slide 1">
            <img src="./public/images/testPic/1.png" alt="Slide 2">
            <img src="./public/images/testPic/1.png" alt="Slide 3">
        </div>
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
    </div>

    <script>
        const slides = document.querySelector('.slides');
        const images = document.querySelectorAll('.slides img');
        const totalSlides = images.length;
        let slideIndex = 0;

        function changeSlide() {
            slideIndex = (slideIndex + 1) % totalSlides;
            const offset = -slideIndex * 100;
            slides.style.transform = `translateX(${offset}%)`;
        }

        setInterval(changeSlide, 2000); // Change image every 3 seconds
    </script>
</body>

</html>