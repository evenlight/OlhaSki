<?php
require_once('../require/security.php');
$storeFolder = $uploaddir;
if (!empty($_FILES)) 
{
    require_once('../require/config.php');
    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/content/gallery/';
    $filename = uniqid().'.jpg';
    $uploadfile = $uploaddir . $filename;
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    $img=$filename;

    $sql="insert into gallery (albumid, img) values (".$_GET['pid'].", '".$img."')";
    $execute=mysqli_query($conn, $sql);
}
?>