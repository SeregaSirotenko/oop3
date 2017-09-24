<?php

include __DIR__ . '\ImproveFileManager.php';

/**
* Класс для работы с файлами
*
* @author Sergey
*/
class Improve2FileManager extends ImproveFileManager
{
/**
* Метод перемещает файл
*
* @author Sergey
* @param string $filename string to output
* @param string $where string to output
* @return string
* @throws Путь до файла указан не верно
*/
    public function moveFile($filename, $where)
    {
        if (!file_exists($filename)) {
            throw new Exception('Путь до файла указан не верно');
        }
        return rename($filename, $where);
    }
}