<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll to Section</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* styles.css */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    button {
        padding: 10px 20px;
        font-size: 16px;
        margin: 20px;
        cursor: pointer;
    }

    .content {
        height: 600px;
        padding: 20px;
        background-color: #f4f4f4;
        margin-bottom: 20px;
        border: 1px solid #ddd;
    }

    /* Styles for the "To Top" button */
    #toTopButton {
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background-color: #333;
        color: white;
        border: none;
        border-radius: 5px;
        display: none;
        /* Initially hidden */
        transition: .3s;
    }

    #toTopButton.show {
        display: block;
        /* Show the button when needed */
    }
</style>

<body>
    <button class="scrollButton" data-target="home">Scroll to Home</button>
    <button class="scrollButton" data-target="about">Scroll to About</button>
    <button class="scrollButton" data-target="services">Scroll to Services</button>
    <button class="scrollButton" data-target="contact">Scroll to Contact</button>

    <div class="content" id="home">Home Content</div>
    <div class="content" id="about">About Content</div>
    <div class="content" id="services">Services Content</div>
    <div class="content" id="contact">Contact Content</div>

    <button id="toTopButton">To Top</button>

    <script>
        // script.js
        document.querySelectorAll('.scrollButton').forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const targetElement = document.getElementById(targetId);
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        const toTopButton = document.getElementById('toTopButton');

        // Show or hide the "To Top" button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) { // Show button after scrolling down 300px
                toTopButton.classList.add('show');
            } else {
                toTopButton.classList.remove('show');
            }
        });

        // Scroll to top when the "To Top" button is clicked
        toTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>