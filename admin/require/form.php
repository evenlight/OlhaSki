<form class="signin-form" method="POST" action="/admin/home/">
    <input type="hidden" name="command" value="authorize">
    <h2 class="form-signin-heading">Авторизация</h2>
    <label for="inputLogin" class="sr-only">Логин</label>
    <input type="text" id="inputLogin" name="login" class="form-control" placeholder="Логин" required autofocus>
    <label for="inputPassword" class="sr-only">Пароль</label>
    <input type="password" id="inputPassword" name ="password" class="form-control" placeholder="Пароль" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button><br>
    <div align="center"><a href="../users/recovery.html">Забыли пароль?</a></div>
</form>