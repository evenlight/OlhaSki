<?php
    function upload_gallery_compress()
    {
        $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/content/gallery/';
        $filename = uniqid().'.jpg';
        $uploadfile = $uploaddir . $filename;
        $move=move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
        $img=$filename;
        if($move)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    upload_gallery_compress();
?>