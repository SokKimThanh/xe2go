<?php
class FolderGallery {
    private $folder;   // Đường dẫn thư mục
    private $title;    // Tiêu đề chủ đề
    private $thumb;    // Ảnh đại diện

    // Hàm khởi tạo (Constructor)
    public function __construct($folder, $title) {
        $this->folder = $folder;
        $this->title = $title;
        $this->thumb = $this->folder . '/thumb.jpg'; // Ảnh đại diện mặc định
    }

    // Kiểm tra thư mục tồn tại
    private function isValidFolder() {
        return is_dir($this->folder);
    }

    // Lấy danh sách ảnh trong thư mục
    private function getImages() {
        if (!$this->isValidFolder()) {
            return []; // Trả về mảng rỗng nếu thư mục không tồn tại
        }
        return array_diff(scandir($this->folder), array('.', '..', 'thumb.jpg'));
    }

    // Tạo HTML cho gallery
    public function renderGallery() {
        if (!$this->isValidFolder()) {
            echo "<p>Thư mục '{$this->title}' không tồn tại.</p>";
            return;
        }

        $images = $this->getImages();
        echo '<div class="gallery-container">';
        echo '<h2>' . $this->title . '</h2>';
        echo '<a data-fancybox="gallery-' . $this->title . '" href="' . $this->thumb . '">';
        echo '<img src="' . $this->thumb . '" alt="' . $this->title . '">';
        echo '</a>';

        foreach ($images as $image) {
            echo '<a data-fancybox="gallery-' . $this->title . '" href="' . $this->folder . '/' . $image . '" style="display: none;"></a>';
        }
        echo '</div>';
    }
}
?>
