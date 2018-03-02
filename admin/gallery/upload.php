<?php
require_once('../require/security.php');
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/content/gallery/';
$storeFolder = $uploaddir;
if (!empty($_FILES)) 
{
    require_once('../require/config.php');
    //$uploaddir="../../content/gallery/";
    $filename = uniqid().'.jpg';
    $uploadfile = $uploaddir . $filename;
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    $img=$filename;

    $sql="insert into gallery (albumid, img) values (".$_GET['pid'].", '".$img."')";
    $execute=mysqli_query($conn, $sql);
}
else 
{                                                           
    $result  = array();
 
    $files = scandir($storeFolder);                 //1
    if ( false!==$files ) {
        foreach ( $files as $file ) {
            if ( '.'!=$file && '..'!=$file) {       //2
                $obj['name'] = $file;
                $obj['size'] = filesize($storeFolder.$ds.$file);
                $result[] = $obj;
            }
        }
    }
     
    header('Content-type: text/json');              //3
    header('Content-type: application/json');
    echo json_encode($result);
}
?>