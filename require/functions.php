<?php
    require_once('config.php');

    function title ($text)
    {
        if (empty($text))
        {
            $title='<title>Горнолыжная школа Олха</title>';
        }
        else
        {
            $title='<title>Горнолыжная школа Олха - '.$text.'</title>';
        }
        return $title;
    }
    function ogtitle ($text)
    {
        if (empty($text))
        {
            $ogtitle='Горнолыжная школа Олха';
        }
        else
        {
            $ogtitle='Горнолыжная школа Олха - '.$text;
        }
        return $ogtitle;
    }

    function meta_description($type, $text, $textDescr)
    {
        if ($type==1)
        {
            echo $textDescr;
        }
        elseif($type==2)
        {
            echo '<meta name="description" content="Горнолыжная школа Олха - '.$text.'"/>';
            echo '<meta property="og:description" content="Горнолыжная школа Олха - '.$text.'" />';
        }
        else
        {
            echo '<meta name="description" content="Иркутск, горнолыжная школа Олха, 
            обучение детей и взрослых катанию на горных лыжах, здоровый образ жизни, снег горы и лес, красивое горнолыжное снаряжение, 
            скорость и адреналин"/>';
            echo '<meta property="og:description" content="Иркутск, горнолыжная школа Олха, 
            обучение детей и взрослых катанию на горных лыжах, здоровый образ жизни, снег горы и лес, красивое горнолыжное снаряжение, 
            скорость и адреналин" />';
        }
    }
?>