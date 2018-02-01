<?php
    require_once('config.php');
    
    function generateCode($length=6) {

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";

        $code = "";

        $clen = strlen($chars) - 1;  
        while (strlen($code) < $length) {

                $code .= $chars[mt_rand(0,$clen)];  
        }

        return $code;

    }

    $hash = md5(generateCode(10));

    $sql = "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($conn, $_POST['login'])."' LIMIT 1";
    //echo $sql;
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($query);

    setcookie("id", $data['user_id'], time()+60*60*24*30);

    setcookie("hash", $hash, time()+60*60*24*30);

    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id']) or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['user_ip'] !== "0")))
    {
        echo '<SCRIPT language="JavaScript"> window.location="/admin/login/";</SCRIPT>';
        //die();
    }
    else
    {
        echo '<SCRIPT language="JavaScript"> window.location="/admin/home/";</SCRIPT>';
    }
?>