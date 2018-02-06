<?php
    if ($_POST['command']=='authorize')
    {
        //Пишем логин и пароль из формы в переменные (для удобства работы):
        $login = $_POST['login'];
        $password = $_POST['password'];
        $query = 'SELECT * FROM users WHERE login="'.$login.'" AND password="'.$password.'"';
        //echo $query;
        $result = mysqli_query($conn, $query); //ответ базы запишем в переменную $result
        if ($result)
        {
           // echo 'true';
        }
        while ($row=mysqli_fetch_assoc($result))
        {
            $user_id=$row['id'];
        }
        //$user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP

        //Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
        if (!empty($user_id)) 
        {
            session_start(); 
            $_SESSION['user'] = $user_id; 
            echo $_SESSION['user'];
            echo '<SCRIPT language="JavaScript"> window.location="/admin/home/";</SCRIPT>';
            //require_once('menu.php');

        } 
        else 
        {
            echo '<div class="alert alert-danger">Неверно указан логин/пароль!</div>';
            //$_SESSION['auth'] = false;
            //die();
            //Пользователь неверно ввел логин или пароль, выполним какой-то код.
        }
    }
?>