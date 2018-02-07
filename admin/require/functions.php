<?php
//echo $_SERVER['DOCUMENT_ROOT'];
    function alert ($url, $result)
    {
        if ($result==1)
        {
            if ($url!=0)
            {
                echo '<div class="alert alert-success col-md-8 col-md-offset-2">Действие выполнено успешно</div>';
                echo '<SCRIPT language="JavaScript"> window.location="/admin/'.$url.'/";</SCRIPT>';
            }
            else
            {
                echo '<div class="alert alert-success col-md-8 col-md-offset-2">Действие выполнено успешно</div>';
            }
        }
        elseif ($result==0)
        {
            echo '<div class="alert alert-danger col-md-8 col-md-offset-2">Не удалось выполнить действие</div>';
        }
        
        unset($url, $result);
    }
    function upload_file ($start, $type)
    {
        if ($start==1)
        {
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/content/img/';
            $filename = uniqid().'.jpg';
            $uploadfile = $uploaddir . $filename;
            move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
            
            if ($type=="U")
            {
                $img=", img='".$filename."'";
            }
            elseif ($type=="I")
            {
                $img=$filename;
            }

            return $img;
        }
    }
    function upload_gallery ($start, $type)
    {
        if ($start==1)
        {
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/content/gallery/';
            $filename = uniqid().'.jpg';
            $uploadfile = $uploaddir . $filename;
            move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);

            if ($type=="I")
            {
                $img=$filename;
            }

            return $img;
        }
    }
?>