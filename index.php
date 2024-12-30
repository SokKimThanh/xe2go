<?php
// Nhúng file class
include './public/class/FolderGallery.php';
?>
<!DOCTYPE html>
<html lang="vi">

<?php include("./public/path-templates/path-css.php") ?>

<body>
    <!-- Trang Landing Page Giới Thiệu Công Ty XE2GO
1. Tiêu đề chính
"Dẫn đầu trong lĩnh vực bảo dưỡng và sửa chữa ô tô chuyên nghiệp"
2. Phần giới thiệu ngắn
Công ty TNHH XE2GO là đơn vị hàng đầu trong lĩnh vực bảo dưỡng, sửa chữa và chăm sóc xe ô tô. Chúng tôi cam kết mang đến dịch vụ đồng bộ, hiệu quả, và đáng tin cậy nhất dành cho khách hàng. Với phương châm “TẬN TÂM – TẬN TỤY – TẬN TÌNH”, XE2GO không ngừng phấn đấu để khẳng định vị thế trong ngành.
3. Tầm nhìn, Sứ mệnh, và giá trị cốt lõi
•	Tầm nhìn: Trở thành trung tâm bảo dưỡng và sửa chữa xe hàng đầu tại Việt Nam.
•	Sứ mệnh: Mang đến cho khách hàng những dịch vụ uy tín và chất lượng nhất, góp phần nâng cao chất lượng cuộc sống.
•	Giá trị cốt lõi:
o	Chất lượng là ưu tiên hàng đầu.
o	Trách nhiệm với khách hàng và cộng đồng.
o	Tân tâm trong từng dịch vụ.
4. Lĩnh vực hoạt động
•	Bảo dưỡng xe ô tô định kỳ.
•	Sửa chữa động cơ, hộp số, gầm xe.
•	Chăm sóc và làm đẹp xe (nội thất, ngoại thất).
•	Làm đồng sơn và sửa chữa xe tai nạn.
•	Phục hồi thước lái.
•	Nâng cấp và lắp ráp phụ tùng, linh kiện.
5. Lý do chọn XE2GO
•	Kỹ thuật viên tay nghề cao, đào tạo chuyên nghiệp.
•	Quy trình làm việc chuẩn xác và hiệu quả.
•	Công nghệ hiện đại và đồng bộ.
•	Bảo hành dịch vụ lên đến 1 năm.
•	Phụ tùng chính hãng.
•	Chi phí hợp lý với chất lượng tốt nhất.
6. Thành tựu đã đạt
•	Xử lý trung bình 15 xe/ngày.
•	Hơn 98 dự án hoàn thành.
•	99% khách hàng hài lòng.
7. Thông tin liên hệ
•	Địa chỉ: 559 Phạm Ngọc Thạch, Phường Phú Mỹ, Thành phố Thủ Dầu Một, Bình Dương.
•	Hotline & Zalo: 0348.798.398
•	Email: xe2govn@gmail.com
•	Thời gian hoạt động: Thứ 2 - Chủ nhật | 08:00 - 17:30.
•	Nhấn xem bản đồ
 -->
    <?php include("./public/path-templates/path-menu.php") ?>
    <!-- Slider Revolution Code Here -->
    <section id="slider-revolution">
        <div class="owl-carousel owl-theme mainSlider">
            <?php
            $sliders = [
                [
                    'image' => 'public/images/trang_chu/xe2go/xe2go_banner_newyear.webp',
                    'title' => 'XE2GO Dẫn đầu trong lĩnh vực bảo dưỡng và sửa chữa ô tô chuyên nghiệp',
                    'description' => '<b>Công ty TNHH XE2GO</b> là đơn vị hàng đầu trong lĩnh vực bảo dưỡng, sửa chữa và chăm sóc xe ô tô. Chúng tôi cam kết mang đến dịch vụ đồng bộ, hiệu quả, và đáng tin cậy nhất dành cho khách hàng. Với phương châm <b>“TẬN TÂM – TẬN TỤY – TẬN TÌNH”</b>, XE2GO không ngừng phấn đấu để khẳng định vị thế trong ngành.',
                    'link' => '/contactus.php'
                ],
                [
                    'image' => 'public/images/trang_chu/xe2go/xe2go_banner_newyear2.webp',
                    'title' => 'XE2GO Dẫn đầu trong lĩnh vực bảo dưỡng và sửa chữa ô tô chuyên nghiệp',
                    'description' => '<b>Công ty TNHH XE2GO</b> là đơn vị hàng đầu trong lĩnh vực bảo dưỡng, sửa chữa và chăm sóc xe ô tô. Chúng tôi cam kết mang đến dịch vụ đồng bộ, hiệu quả, và đáng tin cậy nhất dành cho khách hàng. Với phương châm <b>“TẬN TÂM – TẬN TỤY – TẬN TÌNH”</b>, XE2GO không ngừng phấn đấu để khẳng định vị thế trong ngành.',
                    'link' => '/contactus.php'
                ]
            ];

            foreach ($sliders as $slider) {
                echo '<div class="slider-background" style="background-image: url(' . $slider['image'] . ')">';
                echo '    <div class="container slider-spacing">';
                echo '        <div class="row slider-container">';
                echo '            <div class="col-sm-8 slider-info">';
                echo '                <div class="slider-paragragh">Hệ thống bảo dưỡng xe ô tô</div>';
                echo '                <h1 class="slider-title">';
                echo '                    <b class="logo-text-waving">XE2GO</b> ' . $slider['title'];
                echo '                    <div class="hide">' . $slider['description'] . '</div>';
                echo '                </h1>';
                echo '            </div>';
                echo '            <div class="col-sm-12 slider-button-container">';
                echo '                <a class="slider-button" href="' . $slider['link'] . '">Liên hệ</a>';
                echo '            </div>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>
    <!-- section 6 hinh vuong-->
    <section id="six-box">
        <div class="container">
            <?php
            $galleryMap = [
                'trang_chu/cars_thumb/1Ford-removebg-preview.webp' => 'trang_chu/cars_logo/ford',
                'trang_chu/cars_thumb/2BMW-removebg-preview.webp' => 'trang_chu/cars_logo/bmw',
                'trang_chu/cars_thumb/3Hyundai-removebg-preview.webp' => 'trang_chu/cars_logo/hyundai',
                'trang_chu/cars_thumb/4Audi-removebg-preview.webp' => 'trang_chu/cars_logo/audi',
                'trang_chu/cars_thumb/5Toyota-removebg-preview.webp' => 'trang_chu/cars_logo/toyota',
                'trang_chu/cars_thumb/6Mazda-removebg-preview.webp' => 'trang_chu/cars_logo/mazda',
                'trang_chu/cars_thumb/7Honda-removebg-preview.webp' => 'trang_chu/cars_logo/honda',
                'trang_chu/cars_thumb/8vinfast-removebg-preview.webp' => 'trang_chu/cars_logo/vinfast',
                'trang_chu/cars_thumb/9Mercedes-Benz-removebg-preview.webp' => 'trang_chu/cars_logo/mercedes',
                // Thêm các cặp (thumbnail => folder) tại đây
            ];
            ?>
            <div class="desktop row justify-content-center">
                <?php
                $gallery = new FolderGallery($galleryMap);
                $gallery->renderMappedGalleryCarsLogo('desktop');
                ?>
            </div>
            <div class="mobile row justify-content-center owl-carousel owl-theme logo-xe-slider">
                <?php
                $gallery = new FolderGallery($galleryMap);
                $gallery->renderMappedGalleryCarsLogo('mobile');
                ?>
            </div>
        </div>
    </section>
    <!-- Sứ mệnh, tầm nhìn, giá trị cốt lõi-->
    <section id="aga">
        <div class="container">
            <?php
            $galleryMap = [
                'trang_chu/mvv_thumb/v_mission_logo.webp' => 'trang_chu/mvv_images/mission',
                'trang_chu/mvv_thumb/v_vision_logo.webp' => 'trang_chu/mvv_images/vision',
                'trang_chu/mvv_thumb/v_values_logo.webp' => 'trang_chu/mvv_images/values',
            ];
            ?>
            <div class="desktop row">
                <?php
                $gallery = new FolderGallery($galleryMap);
                $gallery->renderMappedGalleryMVV('desktop');
                ?>
            </div>
            <div class="mobile row">
                <?php
                $gallery = new FolderGallery($galleryMap);
                $gallery->renderMappedGalleryMVV('mobile');
                ?>
            </div>
        </div>
    </section>

    <!-- Lĩnh vực hoạt động dịch vụ -->
    <section id="vfo">
        <div class="container">
            <?php
            $galleryMap = [
                'trang_chu/services_thumb/s_baoduong.webp' => 'trang_chu/services_images/xebaoduong',
                'trang_chu/services_thumb/s_suachua.webp' => 'trang_chu/services_images/xesuachua',
                'trang_chu/services_thumb/s_chamsoc.webp' => 'trang_chu/services_images/xechamsoc',
                'trang_chu/services_thumb/s_dongson.webp' => 'trang_chu/services_images/xedongson',
                'trang_chu/services_thumb/s_phuchoi.webp' => 'trang_chu/services_images/xephuchoi',
                'trang_chu/services_thumb/s_nangcap.webp' => 'trang_chu/services_images/xenangcap'
            ];
            ?>
            <div class="desktop row">
                <?php $gallery = new FolderGallery($galleryMap);
                $gallery->renderMappedGalleryServices('desktop'); ?>
            </div>
            <div class="mobile row">
                <?php $gallery = new FolderGallery($galleryMap);
                $gallery->renderMappedGalleryServices('mobile'); ?>
            </div>
        </div>
    </section>
    <!-- Thành tựu đạt được -->
    <section id="ypss">
        <div class="container">
            <div class="desktop row">
                <div class="col-sm-3 col-md-3">
                    <div class="box-item">
                        <div class="box-number">
                            <span data-target="30">0</span>
                        </div>
                        <div class="box-title">Kỹ thuật viên chuyên nghiệp</div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="box-item">
                        <div class="box-number">
                            <span data-target="15">0</span>
                        </div>
                        <div class="box-title">Xe sửa chữa mỗi ngày</div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="box-item">
                        <div class="box-number">
                            <span data-target="98">0</span><span>+</span>
                        </div>
                        <div class="box-title">Dự án hoàn thành</div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="box-item">
                        <div class="box-number">
                            <span data-target="99">0</span><span>%</span>
                        </div>
                        <div class="box-title">Khách hàng hài lòng</div>
                    </div>
                </div>
            </div>
            <div class="mobile owl-carousel owl-theme achivement-slider">
                <div class="box-item">
                    <div class="box-number">
                        <span data-target="30">0</span>
                    </div>
                    <div class="box-title">Kỹ thuật viên chuyên nghiệp</div>
                </div>
                <div class="box-item">
                    <div class="box-number">
                        <span data-target="15">0</span>
                    </div>
                    <div class="box-title">Xe sửa chữa mỗi ngày</div>
                </div>
                <div class="box-item">
                    <div class="box-number">
                        <span data-target="98">0</span><span>+</span>
                    </div>
                    <div class="box-title">Dự án hoàn thành</div>
                </div>
                <div class="box-item">
                    <div class="box-number">
                        <span data-target="99">0</span><span>%</span>
                    </div>
                    <div class="box-title">Khách hàng hài lòng</div>
                </div>
            </div>
        </div>
    </section>
    <script>
        /* Xử lý đếm số thành tựu */
        // Lấy tất cả các phần tử có class 'counter'
        const counters = document.querySelectorAll('.box-number span[data-target]');

        // Thiết lập hàm đếm số
        const runCounter = (counter) => {
            const target = +counter.getAttribute('data-target'); // Giá trị mục tiêu
            const speed = 200; // Tốc độ đếm
            const increment = target / speed;

            let count = 0;

            const updateCounter = () => {
                if (count < target) {
                    count += increment;
                    counter.innerText = Math.ceil(count);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target; // Đảm bảo đạt giá trị chính xác
                }
            };

            updateCounter();
        };

        // Kiểm tra phần tử có hiển thị trong khung nhìn không
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    runCounter(entry.target);
                    observer.unobserve(entry.target); // Chỉ chạy một lần
                }
            });
        });

        // Áp dụng cho tất cả counter
        counters.forEach(counter => observer.observe(counter));
    </script>

    <!-- Liên kết bảo hiểm -->
    <section id="partner">
        <div class="container">
            <div class="container-title">
                <div class="title">Liên kết bảo hiểm</div>
            </div>
            <?php
            $galleryMap = [
                'trang_chu/partners_thumbnails/tasco_insurance(1).webp' => 'trang_chu/partners_insurances/tasco',
                'trang_chu/partners_thumbnails/pg_insurance.svg' => 'trang_chu/partners_insurances/pg',
                'trang_chu/partners_thumbnails/pvi_insurance.png' => 'trang_chu/partners_insurances/pvi',
                'trang_chu/partners_thumbnails/mic_insurance.png' => 'trang_chu/partners_insurances/mic',
            ];
            ?>
            <div class="desktop row list">
                <?php
                $gallery = new FolderGallery($galleryMap);
                $gallery->renderMappedGalleryInsurance('desktop');
                ?>

            </div>
            <div class="mobile">
                <div class="row list">
                    <?php
                    $gallery = new FolderGallery($galleryMap);
                    $gallery->renderMappedGalleryInsurance('mobile');
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Giấy chứng nhận thành lập công ty , cơ sở pháp lý-->
    <section id="meet">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-12">
                    <div class="box-item">
                        <h5 class="box-title">Cơ sở pháp lý</h5>
                        <hr>
                        <!-- nút xem chi tiết pháp lý -->
                        <a class="box-link" data-fancybox="gallery-certificates" href="./public/images/trang_chu/certificates/s_thanhlapcongty.webp">
                            <span>Xem chi tiết</span>
                        </a>
                        <div class="hidden">
                            <a data-fancybox="gallery-certificates" href="./public/images/trang_chu/certificates/s_thanhlapcongty.webp">
                                <img class="img-fluid" src="./public/images/trang_chu/certificates/s_thanhlapcongty.webp" alt="" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="box-item">
                        <img class="img-fluid box-image" src="./public/images/trang_chu/certificates/s_thanhlapcongty.webp" alt="" loading="lazy">
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="box-item">
                        <img class="img-fluid" src="./public/images/trang_chu/xe2go/xe2go_logo.webp" alt="" loading="lazy">
                        <div class="box-image text-center ">
                            <h2 class="box-title text-secondary">CÔNG TY TNHH XE2GO</h2>
                            <p class="box-content">Luôn đặt sự uy tín và tránh nhiệm lên hàng đầu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- vì sao chọn chúng tôi? -->
    <section id="halini-slider">
        <div class="container">
            <div class="row">
                <div class="container-title">
                    <p>Vì sao chọn <span><b class="text-uppercase"> xe2go</b></span>?</p>
                </div>
                <div class="container-answer-hiding">
                    <div class="line-container row desktop">
                        <div class="col-sm-3 circle">
                            <a class="gallery-link" data-fancybox="gallery-visaochonchungtoi-quytrinh">
                                <p>Quy trình chuyên nghiệp</p>
                            </a>
                        </div>
                        <div class="col-sm-3 circle">
                            <a class="gallery-link" data-fancybox="gallery-visaochonchungtoi-dichvu">
                                <p>Dịch vụ trọn gói</p>
                            </a>
                        </div>
                        <div class="col-sm-3 circle">
                            <a class="gallery-link" data-fancybox="gallery-visaochonchungtoi-baohanh">
                                <p>Bảo hành chu đáo</p>
                            </a>
                        </div>
                        <div class="col-sm-3 circle">
                            <a class="gallery-link" data-fancybox="gallery-visaochonchungtoi-tiendo">
                                <p>Tiến độ nhanh chóng</p>
                            </a>
                        </div>
                    </div>
                    <div class="line-container row mobile owl-carousel owl-theme line-item-slider">
                        <div class="col-sm-3 circle">
                            <a class="gallery-link" data-fancybox="gallery-visaochonchungtoi-quytrinh">
                                <p>Quy trình chuyên nghiệp</p>
                            </a>
                        </div>
                        <div class="col-sm-3 circle">
                            <a class="gallery-link" data-fancybox="gallery-visaochonchungtoi-dichvu">
                                <p>Dịch vụ trọn gói</p>
                            </a>
                        </div>
                        <div class="col-sm-3 circle">
                            <a class="gallery-link" data-fancybox="gallery-visaochonchungtoi-baohanh">
                                <p>Bảo hành chu đáo</p>
                            </a>
                        </div>
                        <div class="col-sm-3 circle">
                            <a class="gallery-link" data-fancybox="gallery-visaochonchungtoi-tiendo">
                                <p>Tiến độ nhanh chóng</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme box-slider">
                    <div class="box-item">
                        <div class="box-author">
                            <img class="author-image" src="./public/svg/kythuatvien.svg" alt="" loading="lazy">
                            <div class="author-info">
                                <h5 class="author-name">Kỹ thuật viên tay nghề cao</h5>
                                <p class="author-description">XE2GO</p>
                            </div>
                        </div>
                        <p class="box-content">Đội ngũ kỹ thuật của XE2GO là những chuyên gia chuyên nghiệp với nhiều năm kinh nghiệm trong lĩnh vực bảo dưỡng & sửa chữa ô tô; cùng với thái độ tận tâm, nhiệt tình và chuyên nghiệp.
                        </p>
                    </div>
                    <div class="box-item">
                        <div class="box-author">
                            <img class="author-image" src="./public/svg/congnghehotro.svg" alt="" loading="lazy">
                            <div class="author-info">
                                <h5 class="author-name">Công nghệ hỗ trợ hiện đại</h5>
                                <p class="author-description">XE2GO
                                </p>
                            </div>
                        </div>
                        <p class="box-content">Công nghệ tại XE2GO luôn được cập nhật và tối ưu hóa để đáp ứng yêu cầu của khách hàng về chất lượng dịch vụ & tốc độ sửa chữa.
                        </p>
                    </div>
                    <div class="box-item">
                        <div class="box-author">
                            <img class="author-image" src="./public/svg/quytrinh.svg" alt="" loading="lazy">
                            <div class="author-info">
                                <h5 class="author-name">Quy trình chuyên nghiệp
                                </h5>
                                <p class="author-description">XE2GO</p>
                            </div>
                        </div>
                        <p class="box-content">Quy trình tại XE2GO được thiết kế để đảm bảo sự hoàn thiện & chính xác trong từng bước của quá trình sửa chữa & bảo dưỡng. Từ việc đánh giá & chẩn đoán tình trạng xe đến thực hiện các công việc.
                        </p>
                    </div>
                    <div class="box-item">
                        <div class="box-author">
                            <img class="author-image" src="./public/svg/baohanh.svg" alt="" loading="lazy">
                            <div class="author-info">
                                <h5 class="author-name">Bảo hành lên tới 1 năm </h5>
                                <p class="author-description">XE2GO</p>
                            </div>
                        </div>
                        <p class="box-content">Chính sách Bảo hành của XE2GO đảm bảo cho quý khách sự hài lòng với dịch vụ của chúng tôi. Cam kết đảm bảo chất lượng & tính nghiệp vụ.
                        </p>
                    </div>

                    <div class="box-item">
                        <div class="box-author">
                            <img class="author-image" src="./public/svg/phutung.svg" alt="" loading="lazy">
                            <div class="author-info">
                                <h5 class="author-name">Phụ tùng ô tô chính hãng</h5>
                                <p class="author-description">XE2GO
                                </p>
                            </div>
                        </div>
                        <p class="box-content">XE2GO chỉ sử dụng phụ tùng chính hãng đảm bảo chất lượng tốt nhất cho xe của khách hàng. Chúng tôi tin tưởng vào các nhãn hiệu uy tín để đảm bảo sự an toàn và hiệu quả hoạt động của xe. </p>
                    </div>

                    <div class="box-item">
                        <div class="box-author">
                            <img class="author-image" src="./public/svg/giaca.svg" alt="" loading="lazy">
                            <div class="author-info">
                                <h5 class="author-name">Giá cả đúng chất lượng
                                </h5>
                                <p class="author-description">XE2GO
                                </p>
                            </div>
                        </div>
                        <p class="box-content">Giá cả của chúng tôi được xác định dựa trên chất lượng dịch vụ và phụ tùng chính hãng. Bạn có thể yên tâm về giá thành hợp lý và đúng với chất lượng dịch vụ.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("./public/path-templates/path-footer.php") ?>
    <?php include("./public/path-templates/path-js.php") ?>

</body>

</html>