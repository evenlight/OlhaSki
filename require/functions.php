<?php
    function title ($text)
    {
        if (empty($text))
        {
            $title='<title>Горнолыжная школа Олха</title>';
        }
        else
        {
            $title='<title>'.$text.'</title>';
        }
        return $title;
    }
?>