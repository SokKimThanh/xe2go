<!DOCTYPE html>
<html lang="en">

<?php
include './public/class/FolderGallery.php';
include("../xe2go/public/path-templates/path-css.php");
$countGal = 1;
$count = 0;
$letter = 65;

$sectionNames = array();
$cardFolder = './public/images/trang_gallery/Card';
$filesAndDirs = scandir($cardFolder);
$files = array_filter($filesAndDirs, function ($item) {
    return $item != '.' && $item != '..';
});


?>

<body>
    <?php include("../xe2go/public/path-templates/path-menu.php") ?>

    <!-- content -->
    <section class="gallery">
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

        <style>
            .demo {
                height: 512px;
                width: 100%;
                background-color: aqua;
                border-radius: 20px;
                margin: 20px 10px 0;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
        </style>
        <?php
        foreach ($sectionNames as $sectionName) {
        ?>
            <section class="demo" id="<?php echo $sectionName; ?>">
                <h1><?php echo $sectionName; ?></h1>
            </section>
        <?php
        }
        ?>

        <button id="toTopButton">Top</button>

    </section>
    <?php include("../xe2go/public/path-templates/path-footer.php") ?>
    <?php include("../xe2go/public/path-templates/path-js.php") ?>
</body>
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

</html>