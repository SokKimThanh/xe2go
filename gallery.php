<!DOCTYPE html>
<html lang="en">

<?php
include './public/class/FolderGallery.php';
include("../xe2go/public/path-templates/path-css.php");
$countGal = 1;
$count = 0;
$letter = 65;

// Lấy danh sách tên các section sẽ xuất hiện làm contents
$sectionNames = array();
$cardFolder = './public/images/trang_gallery/Card';
$filesAndDirs = scandir($cardFolder);
$files = array_filter($filesAndDirs, function ($item) {
    return $item != '.' && $item != '..';
});


$mainDirectory = '.\public\images\trang_gallery';
$filesAndDirs = scandir($mainDirectory);
$galleryDirectories = array_filter($filesAndDirs, function ($item) {
    return $item != '.' && $item != '..';
});
?>

<body>
    <?php include("../xe2go/public/path-templates/path-menu.php") ?>

    <section class="gallery">
        <!-- Gallery Card -->
        <section class="gallery-card container">
            <div class="gallery-card-title">
                <h1>Danh sách sản phẩm</h1>
            </div>
            <div class="gallery-card-content">
                <?php
                foreach ($files as $file) {
                    $picPath = $cardFolder . '\\' . $file;
                    $fileName = explode('.', $file)[0];
                    array_push($sectionNames, $fileName);
                ?>
                    <div class="card">
                        <img class="scrollButton" data-target="<?php echo $fileName; ?>" src="<?php echo $picPath; ?>" alt="<?php echo $fileName; ?>">
                        <div class="card-title">
                            <h4><?php echo $fileName; ?></h4>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>

        <!-- Gallery Contents -->
        <style>

        </style>
        <?php
        foreach ($sectionNames as $sectionName) {
        ?>
            <section class="gallery-content container" id="<?php echo $sectionName; ?>">
                <h1><?php echo $sectionName; ?></h1>
                <div class="slider">
                    <div class="slides">
                        <!-- Ensure you have enough slides to cover the screen and create the loop effect -->
                        <div class="slide"><img src="http://dummyimage.com/600x400/000000/ffffff.png" alt="Slide 1"></div>
                        <div class="slide"><img src="http://dummyimage.com/600x400/eeeeee/cccccc.png" alt="Slide 2"></div>
                        <div class="slide"><img src="http://dummyimage.com/600x400/000000/ffffff.png" alt="Slide 3"></div>
                        <div class="slide"><img src="http://dummyimage.com/600x400/eeeeee/cccccc.png" alt="Slide 4"></div>
                        <div class="slide"><img src="http://dummyimage.com/600x400/000000/ffffff.png" alt="Slide 1"></div>
                        <div class="slide"><img src="http://dummyimage.com/600x400/eeeeee/cccccc.png" alt="Slide 2"></div>
                        <div class="slide"><img src="http://dummyimage.com/600x400/000000/ffffff.png" alt="Slide 3"></div>
                        <div class="slide"><img src="http://dummyimage.com/600x400/eeeeee/cccccc.png" alt="Slide 4"></div>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>

        <!-- To top button-->
        <button id="toTopButton"><i class="fa-solid fa-arrow-up"></i></button>
        
    </section>
    <?php include("../xe2go/public/path-templates/path-footer.php") ?>
    <?php include("../xe2go/public/path-templates/path-js.php") ?>
</body>

<script>
    // Click event to scroll down
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
        if (window.scrollY > 150) { // Show button after scrolling down 300px
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

</html>