<?php
    function alert ($url, $result)
    {
        if ($result==1)
        {
            echo '<div class="alert alert-success col-md-8 col-md-offset-2">Действие выполнено успешно</div>';
            echo '<SCRIPT language="JavaScript"> window.location="/admin/'.$url.'/";</SCRIPT>';
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
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/Content/img/';
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
?>