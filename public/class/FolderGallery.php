<!-- Created Date: 26/12/2024 -->
<!-- Author: SOK KIM THANH -->
<!-- Class: Folder Gallery -->
<!-- Description: This class manages a folder-based image gallery. It maps thumbnails to their corresponding folders and renders HTML for displaying images using Fancybox. -->
<?php
class FolderGallery
{
    private $basePath; // Đường dẫn gốc
    private $galleryMap; // Mảng ánh xạ thumbnail và thư mục hình ảnh
    private $validExtensions = ['webp', 'jpg', 'jpeg', 'png', 'gif']; // Các định dạng hợp lệ cho thumbnail

    // Khởi tạo với ánh xạ galleryMap
    public function __construct($galleryMap)
    {
        $this->basePath = PathManager::findBasePath('images'); // Sử dụng PathManager để tìm đường dẫn gốc
        $this->galleryMap = $this->normalizePaths($galleryMap);
    }

    // Tìm đường dẫn gốc tới thư mục 'public/images'
    private function findBasePath()
    {
        $currentPath = __DIR__;
        while (!is_dir($currentPath . DIRECTORY_SEPARATOR . 'images')) {
            $currentPath = dirname($currentPath);
            if ($currentPath === '/' || is_null($currentPath)) {
                throw new Exception('Không tìm thấy thư mục public/images');
            }
        }
        return $currentPath . DIRECTORY_SEPARATOR . 'images';
    }

    // Chuẩn hóa đường dẫn trong galleryMap
    private function normalizePaths($galleryMap)
    {
        $normalizedMap = [];
        foreach ($galleryMap as $thumbnailPath => $folderPath) {
            $thumbnail = PathManager::normalizePath($thumbnailPath);
            $folder = PathManager::normalizePath($folderPath);

            // Kiểm tra và sửa phần mở rộng của thumbnail
            $thumbnail = $this->correctThumbnailExtension($thumbnail);
            $normalizedMap[$thumbnail] = $folder;
        }
        return $normalizedMap;
    }

    // Sửa định dạng tệp thumbnail nếu cần
    private function correctThumbnailExtension($thumbnailPath)
    {
        $pathInfo = pathinfo($thumbnailPath);

        if (!isset($pathInfo['extension']) || !in_array(strtolower($pathInfo['extension']), $this->validExtensions)) {
            foreach ($this->validExtensions as $ext) {
                $candidate = PathManager::combine($this->basePath, $pathInfo['dirname'], $pathInfo['filename'] . ".$ext");
                if (file_exists($candidate)) {
                    return $candidate; // Trả về thumbnail hợp lệ đầu tiên tìm được
                }
            }
        }
        return $thumbnailPath; // Trả về mặc định
    }

    // Lấy danh sách hình ảnh trong thư mục
    private function getImages($folder)
    {
        $folderPath = PathManager::combine($this->basePath, $folder);

        // Sử dụng PathManager để lấy tệp tin hợp lệ
        $images = PathManager::getFilesInDirectory($folderPath, $this->validExtensions);
        return array_filter($images, function ($image) {
            return strpos(basename($image), 'thumb') === false; // Loại bỏ thumbnail
        });
    }

    /* Sứ mệnh, tầm nhìn, giá trị cốt lõi */
    public function renderMappedGalleryMVV($viewMode = 'desktop')
    {
        $records = [
            [
                'id' => 'mission',
                'title' => 'Sứ mệnh',
                'description' => 'Mang đến cho khách hàng những dịch vụ uy tín và chất lượng nhất.',
                'bgImage' => 'mission/v_mission_bg.webp',
                'stt' => '01'
            ],
            [
                'id' => 'vision',
                'title' => 'Tầm nhìn',
                'description' => 'Trở thành trung tâm bảo dưỡng và sửa chữa xe hàng đầu tại Việt Nam.',
                'bgImage' => 'vision/v_vision_bg.webp',
                'stt' => '02'
            ],
            [
                'id' => 'values',
                'title' => 'Giá trị cốt lõi',
                'description' => 'Chất lượng là ưu tiên hàng đầu.',
                'bgImage' => 'values/v_values_bg.webp',
                'stt' => '03'
            ]
        ];

        foreach ($this->galleryMap as $thumbnailPath => $folderPath) {
            $thumbnail = htmlspecialchars($thumbnailPath);
            $folder = htmlspecialchars($folderPath);

            $images = $this->getImages($folder);
            $record = array_shift($records);

            $fancyboxGroup = $viewMode === 'desktop' ? 'gallery-desktop-' : 'gallery-mobile-';
            $fancyboxGroup .= htmlspecialchars(basename($folderPath));

            $thumbnailPath = PathManager::combine('public/images', $thumbnail);

            echo '<div class="col-sm-12 col-md-12 col-lg-4">';
            echo '  <div class="row box-item">';
            echo '      <a class="col-sm-12 box-item-header" data-fancybox="' . $fancyboxGroup . '">';
            echo '          <img class="box-image img-fluid" src="' . $thumbnailPath . '" alt="" loading="lazy">';
            echo '          <span class="box-mark circle" id="' . $record['id'] . '">' . $record['stt'] . '</span>';
            echo '          <h5 class="box-title">' . $record['title'] . '</h5>';
            echo '      </a>';
            echo '      <div class="col-sm-12 background-fluid">';
            echo '          <p class="box-text">' . $record['description'] . '</p>';
            echo '          <img class="img-fluid background-img" src="public/images/trang_chu/mvv_images/' . $record['bgImage'] . '" alt="">';
            echo '          <a class="box-link data-fancybox="' . $fancyboxGroup . '">' . 'Xem thêm ảnh</a>';
            echo '      </div>';
            echo '  </div>';
            echo '</div>';

            // Render hidden gallery images 
            echo '<div class="hidden">';
            foreach ($images as $image) {
                $relativeImagePath = PathManager::combine('public/images', $folder, basename($image));
                if ($relativeImagePath != $thumbnailPath) {
                    // Kiểm tra trùng lặp với thumbnail 
                    echo '<a data-fancybox="' . $fancyboxGroup . '" href="' . htmlspecialchars($relativeImagePath) . '">';
                    echo ' <img loading="lazy" src="' . htmlspecialchars($relativeImagePath) . '" />';
                    echo ' </a>';
                }
            }
            echo '</div>';
        }
    }
    // Render gallery từ ánh xạ
    /* Logo hãng xe */
    public function renderMappedGalleryCarsLogo($viewMode = 'desktop')
    {
        foreach ($this->galleryMap as $thumbnailPath => $folderPath) {
            $thumbnail = htmlspecialchars($thumbnailPath);
            $folder = htmlspecialchars($folderPath);

            $images = $this->getImages($folder);

            // Xác định nhóm Fancybox dựa trên chế độ hiển thị
            $fancyboxGroup = ($viewMode === 'desktop') ? 'gallery-desktop-' : 'gallery-mobile-';
            $fancyboxGroup .= htmlspecialchars(basename($folderPath));

            // Render thumbnail với href đến hình ảnh đầu tiên (odd)
            $thumbnail_path = 'public/images/' . htmlspecialchars($thumbnail);
            echo '<div class="col-sm-4 col-md-4 col-lg-2 box-container">';
            echo '    <div class="box-item">';
            echo '        <span class="box-icon">';
            echo '            <a data-fancybox="' . $fancyboxGroup . '" href="' . $thumbnail_path . '">';
            echo '                <img loading="lazy" class="img-fluid" src="' . $thumbnail_path . '" alt="' . htmlspecialchars(basename($thumbnail)) . '" />';
            echo '            </a>';
            echo '        </span>';
            echo '    </div>';
            echo '</div>';

            // Render hidden gallery images (even)
            echo '<div class="hidden">';
            foreach ($images as $image) {
                $relativeImagePath = 'public/images/' . htmlspecialchars($folder) . '/' . basename($image);
                if ($relativeImagePath != $thumbnail_path) {
                    // Kiểm tra trùng lặp với thumbnail
                    echo '<a data-fancybox="' . $fancyboxGroup . '" href="' . htmlspecialchars($relativeImagePath) . '">';
                    echo '      <img loading="lazy" src="' . htmlspecialchars($relativeImagePath) . '" />';
                    echo ' </a>';
                }
            }
            echo '</div>';
        }
    }
    /* Liên kết bảo hiểm */
    public function renderMappedGalleryInsurance($viewMode = 'desktop')
    {
        foreach ($this->galleryMap as $thumbnailPath => $folderPath) {
            $thumbnail = htmlspecialchars($thumbnailPath);
            $folder = htmlspecialchars($folderPath);

            $images = $this->getImages($folder);

            // Xác định nhóm Fancybox dựa trên chế độ hiển thị
            $fancyboxGroup = ($viewMode === 'desktop') ? 'gallery-desktop-' : 'gallery-mobile-';
            $fancyboxGroup .= htmlspecialchars(basename($folderPath));

            // Render thumbnail với href đến hình ảnh đầu tiên
            $thumbnail_path = 'public/images/' . htmlspecialchars($thumbnail);
            echo '<div class="col-xs-6 col-sm-6 col-md-3 item">';
            echo '  <a data-fancybox="' . $fancyboxGroup . '" href="' . $thumbnail_path . '">';
            echo '      <img loading="lazy" class="img-fluid logo" src="' . $thumbnail_path . '" alt="' . htmlspecialchars(basename($thumbnail)) . '" />';
            echo '  </a>';
            echo '</div>';

            // Render hidden gallery images 
            echo '<div class="hidden">';
            foreach ($images as $image) {
                $relativeImagePath = 'public/images/' . htmlspecialchars($folder) . '/' . basename($image);
                if ($relativeImagePath != $thumbnail_path) {
                    // Kiểm tra trùng lặp với thumbnail
                    echo '<a data-fancybox="' . $fancyboxGroup . '" href="' . htmlspecialchars($relativeImagePath) . '">';
                    echo '      <img loading="lazy" src="' . htmlspecialchars($relativeImagePath) . '" />';
                    echo '</a>';
                }
            }
            echo '</div>';
        }
    }
    // Hàm renderMappedGalleryServices để hiển thị các dịch vụ 
    public function renderMappedGalleryServices($viewMode = 'desktop')
    {
        $records = [['id' => 'baoduong', 'title' => 'Bảo dưỡng xe ô tô định kỳ.', 'description' => 'Bảo dưỡng định kỳ giúp duy trì hiệu suất và tuổi thọ của xe. Các hạng mục bao gồm thay dầu động cơ, vệ sinh hệ thống làm mát, thay dầu phanh và kiểm tra các bộ phận quan trọng khác.', 'bgImage' => 'services_images/xebaoduong/service_baoduongxe_bg.webp', 'stt' => '01'], ['id' => 'suachua', 'title' => 'Sửa chữa động cơ, hộp số, gầm xe.', 'description' => 'Dịch vụ này bao gồm chẩn đoán và sửa chữa các vấn đề liên quan đến động cơ, hộp số và hệ thống gầm xe, đảm bảo xe hoạt động ổn định và an toàn.', 'bgImage' => 'services_images/xesuachua/service_suachuagamxe.webp', 'stt' => '02'], ['id' => 'chamsoc', 'title' => 'Chăm sóc và làm đẹp xe (nội thất, ngoại thất).', 'description' => 'Dịch vụ chăm sóc xe toàn diện bao gồm vệ sinh, bảo dưỡng và làm đẹp cả nội thất và ngoại thất, giúp xe luôn mới mẻ và tăng giá trị sử dụng.', 'bgImage' => 'services_images/xechamsoc/service_chamsocxe.webp', 'stt' => '03'], ['id' => 'dongson', 'title' => 'Làm đồng sơn và sửa chữa xe tai nạn.', 'description' => 'Dịch vụ đồng sơn ô tô giúp khôi phục hình dáng và màu sơn ban đầu của xe sau tai nạn, đảm bảo tính thẩm mỹ và an toàn khi sử dụng.', 'bgImage' => 'services_images/xedongson/service_dongsonxe.webp', 'stt' => '04'], ['id' => 'phuchoi', 'title' => 'Phục hồi thước lái.', 'description' => 'Phục hồi thước lái giúp khắc phục các vấn đề về hệ thống lái, đảm bảo xe vận hành chính xác và an toàn trên mọi hành trình.', 'bgImage' => 'services_images/xephuchoi/service_phuchoi.webp', 'stt' => '05'], ['id' => 'nangcap', 'title' => 'Nâng cấp và lắp ráp phụ tùng, linh kiện.', 'description' => 'Dịch vụ này cung cấp giải pháp thay thế hoặc nâng cấp các phụ tùng, linh kiện ô tô, đảm bảo xe luôn trong tình trạng tốt nhất và đáp ứng nhu cầu sử dụng của khách hàng.', 'bgImage' => 'services_images/xenangcap/service_nangcap.webp', 'stt' => '06']];
        foreach ($this->galleryMap as $thumbnailPath => $folderPath) {
            $thumbnail = htmlspecialchars($thumbnailPath);
            $folder = htmlspecialchars($folderPath);

            $images = $this->getImages($folder);
            $record = array_shift($records);

            $fancyboxGroup = $viewMode === 'desktop' ? 'gallery-desktop-' : 'gallery-mobile-';
            $fancyboxGroup .= htmlspecialchars(basename($folderPath));

            $thumbnail_path = 'public/images/' . htmlspecialchars($thumbnail);

            echo '<div class="col-sm-4 col-12">';
            echo '  <div class="box-item">';
            echo '      <img class="box-image img-fluid" src="' . $thumbnail_path . '" alt="">';
            echo '      <div class="box-overlay"></div>';
            echo '      <div class="box-hide">';
            echo '          <hr>';
            echo '          <div class="box-text-hide">';
            echo '              <h5 class="box-title">' . $record['title'] . '</h5>';
            echo '              <p class="box-text">' . $record['description'] . '</p>';
            echo '          </div>';
            echo '          <a class="box-button" data-fancybox="' . $fancyboxGroup . '" href="' . $thumbnail_path . '">';
            echo '              <i class="bi bi-arrow-right"></i>';
            echo '          </a>';
            echo '      </div>';
            echo '  </div>';
            echo '</div>';

            // Render hidden gallery images 
            $images = $this->getImages($folder);
            echo '<div class="hidden">';
            foreach ($images as $image) {
                $relativeImagePath = 'public/images/' . htmlspecialchars($folder) . '/' . basename($image);
                if ($relativeImagePath != $thumbnail_path) {
                    // Kiểm tra trùng lặp với thumbnail 
                    echo '<a data-fancybox="' . $fancyboxGroup . '" href="' . htmlspecialchars($relativeImagePath) . '">';
                    echo ' <img loading="lazy" src="' . htmlspecialchars($relativeImagePath) . '" />';
                    echo '</a>';
                }
            }
            echo '</div>';
        }
    }
}

class Ultilities
{
    public static function generate_breadcrumb()
    {
        // Array to hold breadcrumb parts
        $breadcrumb = array();

        // Get current URL
        $url = $_SERVER['REQUEST_URI'];

        // Break URL into parts
        $url_parts = explode("/", $url);

        // Create breadcrumb trail
        $breadcrumb[] = '<a href="/">Home</a>';
        $path = '/';

        foreach ($url_parts as $part) {
            if ($part != "") {
                $path .= $part . '/';
                $breadcrumb[] = '<a href="' . $path . '">' . ucwords(str_replace("-", " ", $part)) . '</a>';
            }
        }

        // Convert breadcrumb array to a string
        return implode(" > ", $breadcrumb);
    }
}

// Ví dụ sử dụng:
// $galleryMap = [
//     'logo_hangxe/1Ford-removebg-preview.webp' => 'trang_gallery/hangxe_logo/ford',
//     'logo_hangxe/2BMW-removebg-preview.webp' => 'trang_gallery/hangxe_logo/bmw',
//     'logo_hangxe/3Hyundai-removebg-preview.webp' => 'trang_gallery/hangxe_logo/hyundai',
//     'logo_hangxe/4Audi-removebg-preview.webp' => 'trang_gallery/hangxe_logo/audi',
//     'logo_hangxe/5Toyota-removebg-preview.webp' => 'trang_gallery/hangxe_logo/toyota',
//     'logo_hangxe/6Mazda-removebg-preview.webp' => 'trang_gallery/hangxe_logo/mazda',
//     'logo_hangxe/7Honda-removebg-preview.webp' => 'trang_gallery/hangxe_logo/honda',
//     'logo_hangxe/8vinfast-removebg-preview.webp' => 'trang_gallery/hangxe_logo/vinfast',
//     'logo_hangxe/9Mercedes-Benz-removebg-preview.webp' => 'trang_gallery/hangxe_logo/mercedes',
//     // Thêm các cặp (thumbnail => folder) tại đây
// ];

// $gallery = new FolderGallery($galleryMap);
// $gallery->renderMappedGallery();
?>