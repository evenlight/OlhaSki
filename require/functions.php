<?php
    function title ($text)
    {
        if (empty($text))
        {
            $title='<title>ДЮСШ "Олха"</title>';
        }
        else
        {
            $title='<title>'.$text.'</title>';
        }
        return $title;
    }
?>