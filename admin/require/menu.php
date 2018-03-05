<div class="collapse navbar-collapse" id="navbar-collapse"> 
    <ul class="nav navbar-nav">
        <?php
            if ($_SESSION['role']==777)
            {

        ?>
                <li><a href="../news/">Новости</a></li>
                <li><a href="../slider/">Слайдер</a></li>
                <li><a href="../trainers/">Тренеры</a></li>
                <li><a href="../athletes/">Спортсмены</a></li>
                <li><a href="../timetable/">Расписание</a></li>
                <li><a href="../events/">Мероприятия</a></li>
                <li><a href="../documents/">Документы</a></li>
                <li><a href="../gallery/">Галерея</a></li>
                <li><a href="../users/">Пользователи</a></li>
        <?php
            }
            else if ($_SESSION['role']==1)
            {
        ?>
                <li><a href="../news/">Новости</a></li>
                <li><a href="../gallery/">Галерея</a></li>
                <li><a href="../athletes/">Спортсмены</a></li>
        <?php
            }
            else
            {
                echo '<div class="alert alert-danger">Для вас не назначено ни одной роли! Обратитесь к администратору</div>';
            }
        ?>
    </ul>  
</div>
<hr>
<div class="pull-right">
    <p>
        <p><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/home/" target="_blank"><span class="glyphicon glyphicon-share-alt"></span> Перейти на сайт</a></p>
        <?php
        if ($_SESSION['role']==777)
        {
            echo ' <p><a href="/admin/users/system.html"><span class="glyphicon glyphicon-user"></span> Системный справочник</a></p>';
        }
        ?>
        <p><a href="/admin/users/pass.html"><span class="glyphicon glyphicon-lock"></span> Сменить пароль</a></p>
        <p><a href="/admin/home/?action=logout"><span class="glyphicon glyphicon-log-out"></span> Выход</a></p>
    </p>
</div>