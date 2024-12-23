<!DOCTYPE html>
<html lang="en">

<?php include("../xe2go/public/templates/path-css.php") ?>

<body>
    <?php include("../xe2go/public/templates/main-menu.php") ?>

    <!-- content -->
    <section id="section-gallery" class="container">
        <div class="row">
            <div class="gallery">
                <h1 class="gallery-title">Các hạng mục bảo dưỡng</h1>
                <h3>Cho dòng xe:</h3>
            </div>

            <div>
                <button class="btn btn-default filter-button" data-filter="all">Tất cả</button>
                <?php
                $directory = '.\public\images\trang_gallery\hangxe_logo';

                // Get all files and directories in the specified directory
                $filesAndDirs = scandir($directory);

                // Filter out only directories
                $directories = array_filter($filesAndDirs, function ($item) use ($directory) {
                    return is_dir($directory . DIRECTORY_SEPARATOR . $item) && !in_array($item, ['.', '..']);
                });
                foreach ($directories as $dir) {
                ?>
                    <button class="btn btn-default filter-button" data-filter="<?php echo $dir; ?>"><?php echo strtoupper($dir); ?></button>
                <?php
                }
                ?>
            </div>
            <div id="lightgallery" class="max-w-xl mx-auto p-10">
                <?php
                $directory = '.\public\images\trang_gallery\hangxe_logo';

                // Get all files and directories in the specified directory
                $filesAndDirs = scandir($directory);

                // Filter out only directories
                $directories = array_filter($filesAndDirs, function ($item) use ($directory) {
                    return is_dir($directory . DIRECTORY_SEPARATOR . $item) && !in_array($item, ['.', '..']);
                });

                // Print the directories
                foreach ($directories as $dir) {
                    $directory = '.\public\images\trang_gallery\hangxe_logo\\' . $dir;
                    $files = scandir($directory);
                    foreach ($files as $file) {
                        if ($file != "." && $file != "..") {
                            $filePath = $directory . "\\" . $file;
                ?>
                            <!-- <?php echo $directory . "\\" . $file . "\n"; ?> -->
                            <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter <?php echo $dir; ?>">
                                <a href="<?php echo $filePath; ?>" data-fancybox="gallery-Audi">
                                    <img src="<?php echo $filePath; ?>" class="img-fluid">
                                </a>
                                <div style="display: none;">
                                    <a href="<?php echo $filePath; ?>" data-fancybox="gallery-Audi">
                                        <img src="<?php echo $filePath; ?>" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <?php include("../xe2go/public/templates/footer.php") ?>
    <?php include("../xe2go/public/templates/path-js.php") ?>
</body>

</html>