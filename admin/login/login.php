<?php

// Страница авторизации



# Функция для генерации случайной строки

function generateCode($length=6) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";

    $code = "";

    $clen = strlen($chars) - 1;  
    while (strlen($code) < $length) {

            $code .= $chars[mt_rand(0,$clen)];  
    }

    return $code;

}



# Соединямся с БД
require_once('../require/config.php');

if(isset($_POST['submit']))

{
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
    $sql = "SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($conn, $_POST['login'])."' LIMIT 1";
    //echo $sql;
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($query);

    

    # Соавниваем пароли

    if($data['user_password'] === $_POST['password'])

    {

        # Генерируем случайное число и шифруем его

        $hash = md5(generateCode(10));
        # Записываем в БД новый хеш авторизации и IP

        mysqli_query($conn, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

        

        # Ставим куки

        setcookie("id", $data['user_id'], time()+60*60*24*30);

        setcookie("hash", $hash, time()+60*60*24*30);

        

        # Переадресовываем браузер на страницу проверки нашего скрипта

        header("Location: check.php"); exit();

    }

    else

    {

        print "Вы ввели неправильный логин/пароль";

    }

}

?>