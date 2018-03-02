<?php
    if ($_SESSION['role']!=777)
    {
        echo '<div class="alert alert-danger">Доступ к контенту запрещен</div>';
        die();
    }
?>