    <a href="main">На главную</a>
    <h1>Авторизация</h1>
    <form action="" method="POST">
        <label>Логин</label>
        <input type="text" name="login">
        <label>Пароль</label>
        <input name="password" type="password">
        <input type="submit" value="Отправить">
    </form>
    <p>
        Еще не зарегистрированы?- <a href="registration">Регистрация</a>
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
