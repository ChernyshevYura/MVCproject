<div>
    <?php
    if (empty($_SESSION['user']['login']) && !isset($_SESSION['user']['login'])) {
    ?>

        <a href="login">Авторизация</a><br><br>
        <a href="registration">Регистрация</a><br>
    <? } ?>
</div>
<? foreach ($data as $row) { ?>
    <p><?= $row[1] ?></p>
    <p><?= $row[2] ?></p>
    <p>Author - <?= $row[3] ?></p>
<? } ?>
<?php

if ($_SESSION['user']['id'] == $row[3]) { ?>
    <a href="/article/delete?id=<?= $row[0] ?>">Удалить</a></td><br>
    <a href="/update?id=<?= $row[0] ?>">Редактировать</a></td><br><br>

<?php } ?>

<a href="main">К другим статьям</a>