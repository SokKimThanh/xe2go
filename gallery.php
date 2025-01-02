<!DOCTYPE html>
<html lang="en">

<?php
include './public/class/FolderGallery.php';
include("../xe2go/public/path-templates/path-css.php");
$countGal = 1;
$count = 0;
$letter = 65;
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
                $cardFolder = './public/images/trang_gallery/Card';
                $filesAndDirs = scandir($cardFolder);
                $files = array_filter($filesAndDirs, function ($item) {
                    return $item != '.' && $item != '..';
                });
                foreach ($files as $file) {
                    $picPath = $cardFolder . '\\' . $file;
                ?>
                    <div class="card">
                        <img class="" src="<?php echo $picPath; ?>" alt="<?php echo $file; ?>">
                        <div class="card-title"><h4><?php echo explode('.', $file)[0]; ?></h4></div>
                    </div>
                <?php
                }
                ?>
            </div>

        </section>

    </section>
    <?php include("../xe2go/public/path-templates/path-footer.php") ?>
    <?php include("../xe2go/public/path-templates/path-js.php") ?>
</body>

</html>