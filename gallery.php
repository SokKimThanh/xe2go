<!DOCTYPE html>
<html lang="en">

<?php include("../xe2go/public/templates/link.php") ?>

<body>
    <?php include("../xe2go/public/templates/header.php") ?>

    <!-- content -->
    <section id="section-gallery" class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <section id="sidebar">
                    <!-- Sidebar  -->
                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <h3>Bootstrap Sidebar</h3>
                        </div>

                        <ul class="list-unstyled components">
                            <p>Dummy Heading</p>
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li>
                                        <a href="#">Home 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a href="#">Page 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Page 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Page 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>

                        <ul class=" CTAs">
                            <li>
                                <a href="#" class="download">Liên hệ</a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <section id="gallery">
                    <div class="row">
                        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="gallery-title">Thư viện ảnh</h1>
                        </div>

                        <div>
                            <button class="btn btn-default filter-button" data-filter="all">All</button>
                            <button class="btn btn-default filter-button" data-filter="type1">Type1</button>
                            <button class="btn btn-default filter-button" data-filter="type2">Type2</button>
                            <button class="btn btn-default filter-button" data-filter="type3">Type3</button>
                            <button class="btn btn-default filter-button" data-filter="type4">Type4</button>
                        </div>
                        <div id="lightgallery">
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type1">
                                <a href="./public/images/gallery/img-1.webp">
                                    <img src="./public/images/gallery/img-1.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type3">
                                <a href="./public/images/gallery/img-3.webp">
                                    <img src="./public/images/gallery/img-3.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type2">
                                <a href="./public/images/gallery/img-2.webp">
                                    <img src="./public/images/gallery/img-2.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type2">
                                <a href="./public/images/gallery/img-2.webp">
                                    <img src="./public/images/gallery/img-2.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type1">
                                <a href="./public/images/gallery/img-1.webp">
                                    <img src="./public/images/gallery/img-1.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type1">
                                <a href="./public/images/gallery/img-1.webp">
                                    <img src="./public/images/gallery/img-1.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type1">
                                <a href="./public/images/gallery/img-1.webp">
                                    <img src="./public/images/gallery/img-1.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type2">
                                <a href="./public/images/gallery/img-2.webp">
                                    <img src="./public/images/gallery/img-2.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type3">
                                <a href="./public/images/gallery/img-3.webp">
                                    <img src="./public/images/gallery/img-3.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type2">
                                <a href="./public/images/gallery/img-2.webp">
                                    <img src="./public/images/gallery/img-2.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type3">
                                <a href="./public/images/gallery/img-3.webp">
                                    <img src="./public/images/gallery/img-3.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type4">
                                <a href="./public/images/gallery/img-4.webp">
                                    <img src="./public/images/gallery/img-4.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type3">
                                <a href="./public/images/gallery/img-3.webp">
                                    <img src="./public/images/gallery/img-3.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type4">
                                <a href="./public/images/gallery/img-4.webp">
                                    <img src="./public/images/gallery/img-4.webp" class="img-fluid">
                                </a>
                            </div>
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter type4">
                                <a href="./public/images/gallery/img-4.webp">
                                    <img src="./public/images/gallery/img-4.webp" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>


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
    // zoom on click
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        licenseKey: '0000-0000-000-0000',
        speed: 500,
        // ... other settings
    });

    // Sidebar script
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

</html>