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
    // Normalize path to handle directory separators
    public static function normalizePath($path)
    {
        return rtrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path), DIRECTORY_SEPARATOR);
    }

    // Combine paths safely
    public static function combine(...$paths)
    {
        $normalizedPaths = array_map([self::class, 'normalizePath'], $paths);
        return join(DIRECTORY_SEPARATOR, $normalizedPaths);
    }

    // Get parent directory
    public static function getParentDirectory($path)
    {
        return dirname(self::normalizePath($path));
    }

    // Check if path is absolute
    public static function isAbsolute($path)
    {
        return preg_match('/^(?:[a-z]:|\\|\/)/i', self::normalizePath($path));
    }

    // Get relative path
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
