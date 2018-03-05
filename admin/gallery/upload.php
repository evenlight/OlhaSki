<?php
require_once('../require/security.php');
require_once('../require/functions.php');
$storeFolder = $uploaddir;
// Пути загрузки файлов
$tmp_path = '../tmp/';
$path = '../../content/gallery/';
//$path = '../img/';
if (!empty($_FILES)) 
{
    /*$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/content/gallery/';
    $filename = uniqid().'.jpg';
    $uploadfile = $uploaddir . $filename;
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    $img=$filename;*/

    $name = resize($_FILES['file'], 2, '');
    // Удаляем временный файл
    $nameImg=uniqid().'.jpg';
    copy($tmp_path . $name, $path . $nameImg);

    unlink($tmp_path . $name);

    require_once('../require/config.php');
    $sql="insert into gallery (albumid, img) values (".$_GET['pid'].", '".$nameImg."')";
    $execute=mysqli_query($conn, $sql);
}
?>