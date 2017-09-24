<?php

header('Content-Type: text/html; charset=utf-8');
include __DIR__ . '\Improve2FileManager.php';

$user = new FileManager();
try {
    $user->createFile('C:\OpenServer\domains\oop3.loc\mydire\text.txt', 'Hi');
} catch (Exception $e) {
	echo $e->getMessage();
}
// $user->getFileContent('C:\OpenServer\domains\oop3.loc\mydir\text.txt');
// try {
//     $user->deleteFile('C:\OpenServer\domains\oop3.loc\mydir\text.txt');    
// } catch (Exception $e) {
//     echo $e->getMessage();
// }
// $user = new ImproveFileManager();
// try {
// 	$user->renameFile('C:\OpenServer\domains\oop3.loc\mydir\text.txt', 'C:\OpenServer\domains\oop3.loc\mydir\newText.txt');
// } catch (Exception $e) {
// 	echo $e->getMessage();
// }
// $user = new Improve2FileManager();
// try {
// 	$user->moveFile('C:\OpenServer\domains\oop3.loc\mydir\newText.txt', 'C:\OpenServer\domains\oop3.loc\newText.txt');
// } catch (Exception $e){
// 	echo $e-> getMessage();
// }