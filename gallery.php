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

</body>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../public/js/owl.carousel.min.js"></script>
<script src="../public/js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.1/plugins/zoom/lg-zoom.umd.min.js"></script>
<script type="text/javascript">
    // Gallery script
    $(document).ready(function() {

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');

            if (value == "all") {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            } else {
                //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    }); 
    
    // su dung fancy box để xem gallery
    Fancybox.bind("[data-fancybox]", {
        // Custom options for all galleries
    });

    Fancybox.bind('[data-fancybox="gallery-type1"]', {
        // Custom options for the first gallery
    });

    Fancybox.bind('[data-fancybox="gallery-type2"]', {
        // Custom options for the first gallery
    });
    Fancybox.bind('[data-fancybox="gallery-type3"]', {
        // Custom options for the first gallery
    });
    Fancybox.bind('[data-fancybox="gallery-type4"]', {
        // Custom options for the first gallery
    });
</script>

</html>