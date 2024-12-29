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

    public function __construct($galleryMap)
    {
        $this->basePath = $this->findBasePath();
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

    // Chuẩn hóa các đường dẫn trong galleryMap
    private function normalizePaths($galleryMap)
    {
        $normalizedMap = [];
        foreach ($galleryMap as $thumbnailPath => $folderPath) {
            $normalizedThumbnail = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $thumbnailPath);
            $normalizedFolder = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $folderPath);

            // Kiểm tra và sửa định dạng của thumbnail
            $correctedThumbnail = $this->correctThumbnailExtension($normalizedThumbnail);
            $normalizedMap[$correctedThumbnail] = $normalizedFolder;
        }
        return $normalizedMap;
    }

    // Kiểm tra và sửa định dạng của thumbnail
    private function correctThumbnailExtension($thumbnailPath)
    {
        $pathInfo = pathinfo($thumbnailPath);
        if (!isset($pathInfo['extension']) || !in_array(strtolower($pathInfo['extension']), $this->validExtensions)) {
            foreach ($this->validExtensions as $ext) {
                $correctedPath = $pathInfo['dirname'] . DIRECTORY_SEPARATOR . $pathInfo['filename'] . '.' . $ext;
                if (file_exists($this->basePath . DIRECTORY_SEPARATOR . $correctedPath)) {
                    return $correctedPath;
                }
            }
        }
        return $thumbnailPath;
    }

    // Lấy danh sách hình ảnh trong thư mục
    private function getImages($folder)
    {
        $images = glob($this->basePath . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
        return array_filter($images, function ($image) {
            return strpos(basename($image), 'thumb') === false; // Bỏ qua thumbnail
        });
    }

    // Render gallery từ ánh xạ
    public function renderMappedGallery($viewMode = 'desktop')
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
    /* lien ket bao hiem */
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
            echo '<div class="col-sm-3 item">';
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
                    echo ' </a>';
                }
            }
            echo '</div>';
        }
    }
    /* Sứ mệnh, tầm nhìn, giá trị cốt lõi */
    public function renderMappedGalleryMVV($viewMode = 'desktop')
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
            
            // Render hidden gallery images 
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