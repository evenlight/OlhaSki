<?php
    session_start(); 
    if (isset($_SESSION['user'])) 
    {
        require_once('menu.php');
        //echo $_SESSION['user'];
    } 
    else 
    {
        require_once('form.php');
        require_once('login.php');
        die();
    }
     
    if (@$_GET['action']=='logout')
    {
        session_start();
        unset($_SESSION['user']);
        session_destroy();
        echo '<SCRIPT language="JavaScript"> window.location="/admin/home/";</SCRIPT>';
    }

    /*require_once('login.php');
    if (!isset($_SESSION['auth']))
    {
        require_once('form.php');  
        die();
    }
    elseif(isset($_SESSION['auth']))
    {
        require_once('menu.php');
    }
    
    require_once('login.php');
*/
?>