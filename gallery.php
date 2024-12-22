<!DOCTYPE html>
<html lang="en">

<?php include("../xe2go/public/templates/link.php") ?>

<body>
    <?php include("../xe2go/public/templates/header.php") ?>

    <!-- content -->
    <section id="section-gallery" class="container">
        <div class="row">
            <div class="gallery">
                <h1 class="gallery-title">Các hạng mục bảo dưỡng</h1>
                <h3>Cho dòng xe:</h3>
            </div>

            <div>
                <button class="btn btn-default filter-button" data-filter="all">Tất cả</button>
                <button class="btn btn-default filter-button" data-filter="type1">ĐỨC, CHÂU ÂU</button>
                <button class="btn btn-default filter-button" data-filter="type2">NHẬT BẢN</button>
                <button class="btn btn-default filter-button" data-filter="type3">HÀN QUỐC</button>
            </div>
            <div id="lightgallery" class="max-w-xl mx-auto p-10">
                <?php
                $directory = 'D:\School\HK5\Intern\xe2go\public\images\trang_gallery\hangxe_logo';

                // Get all files and directories in the specified directory
                $filesAndDirs = scandir($directory);

                // Filter out only directories
                $directories = array_filter($filesAndDirs, function ($item) use ($directory) {
                    return is_dir($directory . DIRECTORY_SEPARATOR . $item) && !in_array($item, ['.', '..']);
                });

                // Print the directories
                foreach ($directories as $dir) {
                    $directory = "./public/images/trang-gallery/hangxe_logo/" . $dir;
                    echo $directory . "<br>";
                    foreach (array_filter(glob($directory.'/*'), 'is_file') as $file) {
                        // Do something with $file
                ?>
                        <?php echo $directory."/".$file . "\n"; ?>
                        <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter <?php echo $dir; ?>">
                            <a href="./public/images/trang_gallery/hangxe_logo/audi/audi-e-tron-gt-thanhnien-6-8132.webp" data-fancybox="gallery-Audi">
                                <img src="./public/images/trang_gallery/hangxe_logo/audi/audi-e-tron-gt-thanhnien-6-8132.webp" class="img-fluid">
                            </a>
                            <div style="display: none;">
                                <a href="./public/images/trang_gallery/hangxe_logo/audi/audi-q7-1.jpg" data-fancybox="gallery-Audi">
                                    <img src="./public/images/trang_gallery/hangxe_logo/audi/audi-q7-1.jpg" class="img-fluid">
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <?php include("../xe2go/public/templates/footer.php") ?>
    <?php include("../xe2go/public/templates/script.php") ?>
</body>

</html>