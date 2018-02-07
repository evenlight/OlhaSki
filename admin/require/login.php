<?php
    if ($_POST['command']=='authorize')
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $query = 'SELECT * FROM users WHERE login="'.$login.'" AND password="'.md5($password).'"';
        $result = mysqli_query($conn, $query);
        while ($row=mysqli_fetch_assoc($result))
        {
            $user_id=$row['id'];
        }

        if (!empty($user_id)) 
        {
            session_start(); 
            $_SESSION['user'] = $user_id; 
            echo '<SCRIPT language="JavaScript"> window.location="/admin/home/";</SCRIPT>';
        } 
        else 
        {
            echo '<div class="alert alert-danger signin-form">Неверно указан логин/пароль!</div>';
        }
    }
?>