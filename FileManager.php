<?php
/**
* Класс для работы с файлами
*
* @author Sergey
*/
class FileManager
{
/**
* Метод создает файл
*
* @author Sergey
* @param string $filename string to output
* @param string $content string to output
* @return string
* @throws Указанной директории не существует
*/
    public function createFile($filename, $content)
    {
        $res = explode('\\', $filename);
        array_pop($res);
        implode('\\', $res);
        if (!file_exists($filename)) {
            throw new Exception('Указанной директории не существует');  
        }
        return file_put_contents($filename, $content);
    }
/**
* Метод возвращает содержимое файла
*
* @author Sergey
* @param string $filename string to output
* @return string
*/
    public function getFileContent($filename)
    {
       return file_get_contents($filename);
    }
/**
* Метод удаляет файл
*
* @author Sergey
* @param string $filename string to output
* @return string
* @throws Файла не существует
*/
    public function deleteFile($filename)
    {
        if (!file_exists($filename)) {
            throw new Exception('Файла не существует');
        }
        return unlink($filename);
    }
}