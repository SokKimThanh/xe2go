<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Gallery Slider</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* styles.css */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 20px;
    }

    .card {
        width: 100%;
        max-width: 256px;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        width: 100%;
        height: auto;
    }

    .card-title {
        padding: 10px;
        text-align: center;
        background-color: #333;
        color: white;
        font-size: 18px;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
        .gallery {
            flex-direction: row;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .card {
            min-width: 300px;
            margin-right: 20px;
        }
    }
</style>

<body>
    <div class="gallery">
        <div class="card">
            <img src="./public/images/testPic/1.png" alt="Image 1">
            <div class="card-title">Title 1</div>
        </div>
        <div class="card">
            <img src="./public/images/testPic/1.png" alt="Image 2">
            <div class="card-title">Title 2</div>
        </div>
        <div class="card">
            <img src="./public/images/testPic/1.png" alt="Image 3">
            <div class="card-title">Title 3</div>
        </div>
        <!-- Add more cards as needed -->
    </div>

    <script>
        // script.js
        document.addEventListener('DOMContentLoaded', function() {
            const gallery = document.querySelector('.gallery');

            // Implement slider functionality for mobile
            if (window.innerWidth <= 768) {
                gallery.classList.add('slider');
            }

            window.addEventListener('resize', function() {
                if (window.innerWidth <= 768) {
                    gallery.classList.add('slider');
                } else {
                    gallery.classList.remove('slider');
                }
            });
        });
    </script>
</body>

</html>