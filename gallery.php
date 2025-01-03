<!DOCTYPE html>
<html lang="en">

<?php
include './public/class/FolderGallery.php';
include("../xe2go/public/path-templates/path-css.php");
$picIndex = 0;
$picLimit = 4;
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
            <!-- #region Gallery card title -->
            <div class="gallery-card-title">
                <h1>Danh sách sản phẩm</h1>
            </div>
            <!-- #endregion -->

            <!-- #region Gallery card content -->
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
            <!-- #endregion -->
        </section>

        <!-- Gallery Contents -->
        <style>

        </style>
        <?php
        foreach ($galleryDirectories as $galDirectory) {
            $flg = false;
            if ($galDirectory != 'Card') {
        ?>
                <section class="gallery-content container" id="<?php echo $galDirectory; ?>">

                    <!-- #region Gallery content title-->
                    <h1 class="gallery-title"><?php echo explode('_', $galDirectory)[1]; ?></h1>
                    <?php
                    // Check for sub folders
                    $galDirectoryName = $galDirectory;
                    $galDirectory = $mainDirectory . '\\' . $galDirectory;
                    $filesAndDirs = scandir($galDirectory);
                    $subDirectories = array_filter($filesAndDirs, function ($item) use ($galDirectory) {
                        return is_dir($galDirectory . DIRECTORY_SEPARATOR . $item) && !in_array($item, ['.', '..']);
                    });
                    // Create nav and filter for sub folders
                    if (count($subDirectories) > 0) {
                        // Check true if sub folders existed
                        $flg = true;
                    } else {
                        $flg = false;
                    }
                    ?>
                    <!-- #endregion -->

                    <!-- #region Gallery content Sliders -->

                    <div class="slider">
                        <div class="slides">
                            <?php
                            // If sub folder existed, crawl pictures in sub folders with filters
                            if ($flg) {
                                // Number of subDirectories
                                $length = count($subDirectories);

                                // Number of image(s) per subDirectory
                                $limitedPicIndex = floor($picLimit / $length);

                                // Current subDirectoy index in array
                                $currentPosition = 0;

                                // Total shown images
                                $shownImagesCount = 0;

                                foreach ($subDirectories as $subDirectory) {
                                    // Get all images in subDirectory
                                    $pictureFolderPath = $galDirectory . '\\' . $subDirectory;
                                    $filesAndDirs = scandir($pictureFolderPath);
                                    $files = array_filter($filesAndDirs, function ($item) {
                                        return $item != '.' && $item != '..';
                                    }); //echo $pictureFolderPath . "<br>";

                                    // Show image(s) on site
                                    foreach ($files as $file) {
                                        if ($picIndex == $limitedPicIndex && $currentPosition != $length - 1) {
                                            break;
                                        } else {
                                            if ($shownImagesCount == $picLimit) {
                                                break;
                                            }
                                        }
                                        $filePath = $pictureFolderPath . "\\" . $file;
                                        $fileName = explode('.', $file)[0];
                                        $folderName = explode('_', $subDirectory)[1];
                                        //echo $pictureFolderPath . "\\" . $file . "<br>";
                            ?>
                                        <!-- Ensure you have enough slides to cover the screen and create the loop effect -->
                                        <div class="slide filter <?php echo chr($letter) . $count; ?>">
                                            <div class="card">
                                                <img src="<?php echo $filePath; ?>" alt="<?php echo $fileName; ?>">
                                                <div class="card-title">
                                                    <h4><?php echo $folderName; ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        $shownImagesCount++;
                                        $picIndex++;
                                    }
                                    $picIndex = 0;
                                    $count++;
                                    $currentPosition++;
                                }
                                $currentPosition = 0;
                                $shownImagesCount = 0;
                                $count = 0;

                                // Second print for infinite loop effect
                                foreach ($subDirectories as $subDirectory) {
                                    // Get all images in subDirectory
                                    $pictureFolderPath = $galDirectory . '\\' . $subDirectory;
                                    $filesAndDirs = scandir($pictureFolderPath);
                                    $files = array_filter($filesAndDirs, function ($item) {
                                        return $item != '.' && $item != '..';
                                    }); //echo $pictureFolderPath . "<br>";

                                    // Show image(s) on site
                                    foreach ($files as $file) {
                                        if ($picIndex == $limitedPicIndex && $currentPosition != $length - 1) {
                                            break;
                                        } else {
                                            if ($shownImagesCount == $picLimit) {
                                                break;
                                            }
                                        }
                                        $filePath = $pictureFolderPath . "\\" . $file;
                                        $fileName = explode('.', $file)[0];
                                        $folderName = explode('_', $subDirectory)[1];
                                        //echo $pictureFolderPath . "\\" . $file . "<br>";
                                    ?>
                                        <!-- Ensure you have enough slides to cover the screen and create the loop effect -->
                                        <div class="slide filter <?php echo chr($letter) . $count; ?>">
                                            <div class="card">
                                                <img src="<?php echo $filePath; ?>" alt="<?php echo $fileName; ?>">
                                                <div class="card-title">
                                                    <h4><?php echo $folderName; ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        $shownImagesCount++;
                                        $picIndex++;
                                    }
                                    $picIndex = 0;
                                    $count++;
                                    $currentPosition++;
                                }
                                $currentPosition = 0;
                                $shownImagesCount = 0;
                                $count = 0;
                            } else {
                                $pictureFolderPath = $galDirectory;
                                $filesAndDirs = scandir($pictureFolderPath);
                                $files = array_filter($filesAndDirs, function ($item) {
                                    return $item != '.' && $item != '..';
                                });
                                //echo $pictureFolderPath;
                                foreach ($files as $file) {
                                    $filePath = $pictureFolderPath . "\\" . $file;
                                    $fileName = explode('.', $file)[0];
                                    $folderName = explode('_', $galDirectoryName)[1];
                                    //echo $pictureFolderPath . "\\" . $file . "<br>";
                                    ?>
                                    <div class="slide filter <?php echo chr($letter) . $count; ?>">
                                        <div class="card">
                                            <img src="<?php echo $filePath; ?>" alt="<?php echo $fileName; ?>">
                                            <div class="card-title">
                                                <h4><?php echo $folderName; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }

                                // Second print for infinite loop effect
                                foreach ($files as $file) {
                                    $filePath = $pictureFolderPath . "\\" . $file;
                                    $fileName = explode('.', $file)[0];
                                    //echo $pictureFolderPath . "\\" . $file . "<br>";
                                ?>
                                    <div class="slide filter <?php echo chr($letter) . $count; ?>">
                                        <div class="card">
                                            <img src="<?php echo $filePath; ?>" alt="<?php echo $fileName; ?>">
                                            <div class="card-title">
                                                <h4><?php echo $folderName; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }

                            ?>
                        </div>
                    </div>
                    <!-- #endregion -->

                </section>
        <?php
                $letter++;
                $count = 0;
            }
        }
        $letter = 65;
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