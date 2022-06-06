    <a href="main">На главную</a>
    <h1>Регистрация</h1>
    <form action="" method="POST">
        <label>ФИО</label>
        <input type="text" name="full_name">
        <label>Логин</label>
        <input type="text" name="login">
        <label>Пароль</label>
        <input name="password" type="password">
        <label>Подтверждение пароля</label>
        <input name="password_confirm" type="password">
        <input type="submit" value="Отправить">
    </form>
    <p>
        Уже зарегистрированы?- <a href="login">Авторизация</a>
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
