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
?>