<!DOCTYPE html>
<html lang="en">
<style>
    /* styles.css */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #333;
        padding: 10px 0;
        z-index: 1000;
    }

    .flex-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-flow: nowrap;
        padding: 0 20px;
    }

    .flex-col {
        max-height: 100%;
    }

    .flex-col:not(.col-medium-center) {
        flex: 1;
    }

    .col-medium-left {
        margin-right: auto;
    }

    .col-medium-right {
        margin-left: auto;
    }

    .col-medium-center {
        margin: 0 auto;
    }

    .logo {
        color: white;
        text-decoration: none;
        font-size: 24px;
        margin-left: 10px;
    }

    .menu-icon {
        display: none;
        font-size: 24px;
        color: white;
        cursor: pointer;
    }

    .nav-links {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .nav-links li {
        margin: 0 15px;
    }

    .nav-links li a {
        color: white;
        text-decoration: none;
        padding: 8px 16px;
        display: inline-block;
    }

    .nav-links li a:hover {
        background-color: #575757;
        border-radius: 4px;
    }

    .content {
        padding: 60px 20px;
        margin-top: 50px;
    }

    section section {
        height: 600px;
        padding: 20px;
        background-color: #f4f4f4;
        margin-bottom: 20px;
        border: 1px solid #ddd;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
        .nav-links {
            display: none;
            flex-direction: column;
            width: 100%;
        }

        .nav-links.active {
            display: flex;
        }

        .menu-icon {
            display: block;
        }

        .navbar-container {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section class="header">
        <nav class="navbar">
            <div class="navbar-container flex-row">
                <div class="flex-col col-medium-left">
                    <a href="#" class="logo">Logo</a>
                    <div class="menu-icon" id="menu-icon">☰</div>
                </div>
                <div class="flex-col col-medium-center">
                    <ul class="nav-links" id="nav-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="flex-col col-medium-right">

                </div>
            </div>
        </nav>
    </section>
    <section class="content">
        <section id="home">Home Content</section>
        <section id="about">About Content</section>
        <section id="services">Services Content</section>
        <section id="contact">Contact Content</section>
    </section>

</body>
<script>
    // script.js
    document.getElementById('menu-icon').addEventListener('click', function() {
        var navLinks = document.getElementById('nav-links');
        navLinks.classList.toggle('active');
    });
</script>

</html>