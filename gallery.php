<!DOCTYPE html>
<html lang="en">

<?php include("../xe2go/public/path-templates/path-css.php");
$countGal = 1;
$count = 0;
$letter = 65;
?>

<body>
    <?php include("../xe2go/public/path-templates/path-menu.php") ?>

    <!-- content -->
    <section id="section-gallery" class="container">
        <?php
        $mainDirectory = '.\public\images\trang_gallery';

        // Get all files and directories in the specified directory
        $filesAndDirs = scandir($mainDirectory);

        // Filter out only directories
        $galleryDirectories = array_filter($filesAndDirs, function ($item) use ($mainDirectory) {
            return is_dir($mainDirectory . DIRECTORY_SEPARATOR . $item) && !in_array($item, ['.', '..']);
        });

        foreach ($galleryDirectories as $galDirectory) {
            $flg = false;
        ?>
            <div class="row">
                <div class="gallery-box" id="gallery<?php echo $countGal++; ?>">
                    <!-- Box header -->
                    <h1 class="gallery-title"><?php echo explode('_', $galDirectory)[1]; ?></h1>
                    <?php
                    // Check for sub folders
                    $galDirectory = $mainDirectory . '\\' . $galDirectory;
                    $filesAndDirs = scandir($galDirectory);
                    $subDirectories = array_filter($filesAndDirs, function ($item) use ($galDirectory) {
                        return is_dir($galDirectory . DIRECTORY_SEPARATOR . $item) && !in_array($item, ['.', '..']);
                    });
                    // Create nav and filter for sub folders
                    if (count($subDirectories) > 0) {
                        // Check true if sub folders existed
                        $flg = true;
                    ?>
                        <div class="gallery-subtitle">
                            <button class="btn btn-default filter-button" data-filter="all">Tất cả</button>
                            <?php
                            foreach ($subDirectories as $subDirectory) {
                            ?>
                                <button class="btn btn-default filter-button" data-filter="<?php echo chr($letter) . $count;
                                                                                            $count++; ?>"><?php echo explode('_', $subDirectory)[1]; ?></button>
                            <?php
                            }
                            $count = 0;
                            ?>
                        </div>
                    <?php
                    } else {
                        $flg = false;
                    }
                    ?>
                    <!-- Box content -->
                    <div id="lightgallery" class="max-w-xl mx-auto p-10">
                        <?php
                        // If sub folder existed, crawl pictures in sub folders with filters
                        if ($flg) {
                            foreach ($subDirectories as $subDirectory) {
                                $pictureFolderPath = $galDirectory . '\\' . $subDirectory;
                                $filesAndDirs = scandir($pictureFolderPath);
                                $files = array_filter($filesAndDirs, function ($item) {
                                    return $item != '.' && $item != '..';
                                });
                                //echo $pictureFolderPath . "<br>";
                                foreach ($files as $file) {
                                    $filePath = $pictureFolderPath . "\\" . $file;
                                    //echo $pictureFolderPath . "\\" . $file . "<br>";
                        ?>
                                    <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter <?php echo chr($letter) . $count; ?>">
                                        <a href="<?php echo $filePath; ?>" data-fancybox="gallery-<?php echo chr($letter) . $count; ?>">
                                            <img src="<?php echo $filePath; ?>" class="img-fluid" loading="lazy">
                                        </a>
                                    </div>
                                <?php
                                }
                                $count++;
                            }
                            $count = 0;
                        }
                        // If sub folders does not existed, crawl pictures from main gallery folders without filters
                        else {
                            $pictureFolderPath = $galDirectory;
                            $filesAndDirs = scandir($pictureFolderPath);
                            $files = array_filter($filesAndDirs, function ($item) {
                                return $item != '.' && $item != '..';
                            });
                            //echo $pictureFolderPath;
                            foreach ($files as $file) {
                                $filePath = $pictureFolderPath . "\\" . $file;
                                //echo $pictureFolderPath . "\\" . $file . "<br>";
                                ?>
                                <div class="gallery_product col-sm-4 col-md-3 col-lg-4">
                                    <a href="<?php echo $filePath; ?>" data-fancybox="gallery-00">
                                        <img src="<?php echo $filePath; ?>" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php
            $letter++;
            $count = 0;
        }
        $letter = 65;
        ?>


    </section>
    <?php include("../xe2go/public/path-templates/path-footer.php") ?>
    <?php include("../xe2go/public/path-templates/path-js.php") ?>
</body>

</html>