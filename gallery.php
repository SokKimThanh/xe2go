<!DOCTYPE html>
<html lang="en">

<?php include("../xe2go/public/templates/link.php") ?>

<body>
    <?php include("../xe2go/public/templates/header.php") ?>

    <!-- content -->
    <section id="section-gallery" class="container">
        <div class="row">
            <div class="gallery">
                <h1 class="gallery-title">Danh mục sản phẩm (Hình Ảnh)</h1>
            </div>

            <div>
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="type1">Type1</button>
                <button class="btn btn-default filter-button" data-filter="type2">Type2</button>
                <button class="btn btn-default filter-button" data-filter="type3">Type3</button>
                <button class="btn btn-default filter-button" data-filter="type4">Type4</button>
            </div>
            <div id="lightgallery" class="max-w-xl mx-auto p-10">
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type1">
                    <a href="./public/images/gallery/img-1.webp" data-fancybox="gallery-type1">
                        <img src="./public/images/gallery/img-1.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type3">
                    <a href="./public/images/gallery/img-3.webp" data-fancybox="gallery-type3">
                        <img src="./public/images/gallery/img-3.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type2">
                    <a href="./public/images/gallery/img-2.webp" data-fancybox="gallery-type2">
                        <img src="./public/images/gallery/img-2.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type2">
                    <a href="./public/images/gallery/img-2.webp" data-fancybox="gallery-type2">
                        <img src="./public/images/gallery/img-2.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type1">
                    <a href="./public/images/gallery/img-1.webp" data-fancybox="gallery-type1">
                        <img src="./public/images/gallery/img-1.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type1">
                    <a href="./public/images/gallery/img-1.webp" data-fancybox="gallery-type1">
                        <img src="./public/images/gallery/img-1.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type1">
                    <a href="./public/images/gallery/img-1.webp" data-fancybox="gallery-type1">
                        <img src="./public/images/gallery/img-1.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type2">
                    <a href="./public/images/gallery/img-2.webp" data-fancybox="gallery-type2">
                        <img src="./public/images/gallery/img-2.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type3">
                    <a href="./public/images/gallery/img-3.webp" data-fancybox="gallery-type3">
                        <img src="./public/images/gallery/img-3.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type2">
                    <a href="./public/images/gallery/img-2.webp" data-fancybox="gallery-type2">
                        <img src="./public/images/gallery/img-2.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type3">
                    <a href="./public/images/gallery/img-3.webp" data-fancybox="gallery-type3">
                        <img src="./public/images/gallery/img-3.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type4">
                    <a href="./public/images/gallery/img-4.webp" data-fancybox="gallery-type4">
                        <img src="./public/images/gallery/img-4.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type3">
                    <a href="./public/images/gallery/img-3.webp" data-fancybox="gallery-type3">
                        <img src="./public/images/gallery/img-3.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type4">
                    <a href="./public/images/gallery/img-4.webp" data-fancybox="gallery-type4">
                        <img src="./public/images/gallery/img-4.webp" class="img-fluid">
                    </a>
                </div>
                <div class="gallery_product col-sm-4 col-md-3 col-lg-4 filter type4">
                    <a href="./public/images/gallery/img-4.webp" data-fancybox="gallery-type4">
                        <img src="./public/images/gallery/img-4.webp" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php include("../xe2go/public/templates/footer.php") ?>
    <?php include("../xe2go/public/templates/script.php") ?>
</body>

</html>