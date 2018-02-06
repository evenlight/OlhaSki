<?php
    if ($_POST['command']=='authorize')
    {

        //Пишем логин и пароль из формы в переменные (для удобства работы):
        $login = $_POST['login'];
        $password = $_POST['password'];

        /*
            Формируем и отсылаем SQL запрос:
            ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login И поле_пароль = $password.
        */
        $query = 'SELECT * FROM users WHERE login="'.$login.'" AND password="'.$password.'"';
        //echo $query;
        $result = mysqli_query($conn, $query); //ответ базы запишем в переменную $result
        $user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP

        //Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
        if (!empty($user)) 
        {
            session_start(); 
            $_SESSION['auth'] = true; 
            //echo '<SCRIPT language="JavaScript"> window.location="/admin/home/";</SCRIPT>';
            require_once('menu.php');

        } 
        else 
        {
            echo '<div class="alert alert-danger">sdkljfskjsdk</div>';
            $_SESSION['auth'] = false;
            die();
            //Пользователь неверно ввел логин или пароль, выполним какой-то код.
        }
    }
?>