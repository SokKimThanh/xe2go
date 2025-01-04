<?php
class FileManager
{
    private $baseDir;

    public function __construct($baseDir)
    {
        $this->baseDir = rtrim($baseDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    }

    // Normalize path to handle relative and absolute paths
    private function normalizePath($path)
    {
        return rtrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path), DIRECTORY_SEPARATOR);
    }

    // Ensure directory exists, create if not
    private function ensureDirectoryExists($dir)
    {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
    }

    // List all files and folders in a directory
    public function listFiles($subDir = '')
    {
        $dir = $this->normalizePath($this->baseDir . $subDir);
        if (!is_dir($dir)) {
            return [];
        }

        return array_diff(scandir($dir), ['.', '..']);
    }

    // Get file details (size, type, modified time)
    public function getFileDetails($filePath)
    {
        $fullPath = $this->normalizePath($this->baseDir . $filePath);
        if (!file_exists($fullPath)) {
            return null;
        }

        return [
            'size' => filesize($fullPath),
            'type' => filetype($fullPath),
            'modified' => date("Y-m-d H:i:s", filemtime($fullPath)),
        ];
    }

    // Delete a file
    public function deleteFile($filePath)
    {
        $fullPath = $this->normalizePath($this->baseDir . $filePath);
        if (is_file($fullPath)) {
            return unlink($fullPath);
        }

        return false;
    }

    // Move a file
    public function moveFile($sourcePath, $destinationPath)
    {
        $sourceFullPath = $this->normalizePath($this->baseDir . $sourcePath);
        $destinationFullPath = $this->normalizePath($this->baseDir . $destinationPath);

        // Ensure source exists
        if (!file_exists($sourceFullPath)) {
            return false;
        }

        // Ensure destination directory exists
        $this->ensureDirectoryExists(dirname($destinationFullPath));

        // Move the file
        return rename($sourceFullPath, $destinationFullPath);
    }

    // Copy a file
    public function copyFile($sourcePath, $destinationPath)
    {
        $sourceFullPath = $this->normalizePath($this->baseDir . $sourcePath);
        $destinationFullPath = $this->normalizePath($this->baseDir . $destinationPath);

        $this->ensureDirectoryExists(dirname($destinationFullPath));

        if (file_exists($sourceFullPath)) {
            return copy($sourceFullPath, $destinationFullPath);
        }

        return false;
    }

    // Check if a file exists
    public function fileExists($filePath)
    {
        return file_exists($this->normalizePath($this->baseDir . $filePath));
    }
}

class PathManager
{
    // Chuẩn hóa đường dẫn để xử lý dấu phân cách
    public static function normalizePath($path)
    {
        return rtrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path), DIRECTORY_SEPARATOR);
    }

    // Kết hợp nhiều phần của đường dẫn và kiểm tra sự tồn tại
    public static function combine(...$paths)
    {
        $combinedPath = join(DIRECTORY_SEPARATOR, array_map([self::class, 'normalizePath'], $paths));
        return self::normalizePath($combinedPath);
    }

    // Kết hợp và xác thực sự tồn tại của đường dẫn
    public static function combineAndValidate(...$paths)
    {
        $combinedPath = self::combine(...$paths);
        if (!self::pathExists($combinedPath)) {
            throw new Exception("Đường dẫn không tồn tại hoặc không hợp lệ: $combinedPath");
        }
        return $combinedPath;
    }

    // Kiểm tra đường dẫn có tồn tại hay không
    public static function pathExists($path)
    {
        return file_exists(self::normalizePath($path));
    }

    // Kiểm tra đường dẫn có phải thư mục hợp lệ hay không
    public static function isValidDirectory($path)
    {
        return is_dir(self::normalizePath($path));
    }

    // Kiểm tra đường dẫn có phải tệp tin hợp lệ hay không
    public static function isValidFile($path)
    {
        return is_file(self::normalizePath($path));
    }

    // Lấy thư mục cha từ đường dẫn
    public static function getParentDirectory($path)
    {
        return dirname(self::normalizePath($path));
    }

    // Kiểm tra đường dẫn có tuyệt đối hay không
    public static function isAbsolute($path)
    {
        $path = self::normalizePath($path);
        return preg_match('/^(?:[a-z]:|\\\\|\/)/i', $path);
    }

    // Tính toán đường dẫn tương đối từ một đường dẫn đến đường dẫn khác
    public static function getRelativePath($from, $to)
    {
        $from = self::normalizePath($from);
        $to = self::normalizePath($to);

        $fromParts = explode(DIRECTORY_SEPARATOR, $from);
        $toParts = explode(DIRECTORY_SEPARATOR, $to);

        while (count($fromParts) && count($toParts) && ($fromParts[0] == $toParts[0])) {
            array_shift($fromParts);
            array_shift($toParts);
        }

        return str_repeat('..' . DIRECTORY_SEPARATOR, count($fromParts)) . join(DIRECTORY_SEPARATOR, $toParts);
    }

    // Tìm đường dẫn gốc dựa vào thư mục cụ thể (vd: 'public/images')
    public static function findBasePath($targetFolder)
    {
        $currentPath = __DIR__;
        while (!is_dir($currentPath . DIRECTORY_SEPARATOR . $targetFolder)) {
            $currentPath = dirname($currentPath);
            if ($currentPath === '/' || is_null($currentPath)) {
                throw new Exception("Không tìm thấy thư mục: $targetFolder");
            }
        }
        return self::combine($currentPath, $targetFolder);
    }

    // Danh sách tệp tin trong thư mục (lọc theo đuôi tệp tin)
    public static function getFilesInDirectory($folder, $extensions = [])
    {
        $folder = self::normalizePath($folder);

        if (!self::isValidDirectory($folder)) {
            throw new Exception("Thư mục không tồn tại: $folder");
        }

        $pattern = $folder . DIRECTORY_SEPARATOR . '*';
        if (!empty($extensions)) {
            $extPattern = '{' . implode(',', $extensions) . '}';
            $pattern .= ".{$extPattern}";
        }

        return glob($pattern, GLOB_BRACE);
    }
}


// // Example usage:
// $fileManager = new FileManager(__DIR__ . '/public');
// $pathManager = new PathManager();

// // Normalize paths
// echo $pathManager::normalizePath('/var/www/html/public');

// // Combine paths
// echo $pathManager::combine('/var/www', 'html/public');

// // Get relative path
// echo $pathManager::getRelativePath('/var/www/html', '/var/www/css');
