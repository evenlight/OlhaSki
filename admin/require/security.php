<?php
    //require_once('config.php');
    if (isset($_SESSION['auth'])==false)
    {
        require_once('form.php');  
        require_once('login.php'); 
        die();
    }
    else
    {
            
        
    }
    if (@$_GET['action']=='logout')
    {
        session_destroy();
        //echo '<SCRIPT language="JavaScript"> window.location="/admin/home/";</SCRIPT>';
    }
?>