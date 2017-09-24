<?php

include __DIR__ . '/FileManager.php';

/**
* Класс для работы с файлами
*
* @author Sergey
*/
class ImproveFileManager extends FileManager
{
/**
* Метод переименовывает файл
*
* @author Sergey
* @param string $filename string to output
* @param string $newName string to output
* @return string
* @throws Путь до файла указан не верно
*/
    public function renameFile($filename, $newName)
    {
        if (!file_exists($filename)) {
            throw new Exception('Путь до файла указан не верно');
        }
        return rename($filename, $newName);
    }
}