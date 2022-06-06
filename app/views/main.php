    <div>
        <?php 
        if (empty($_SESSION['user']['login']) && !isset($_SESSION['user']['login'])){
            ?>
       
        <a href="login">Авторизация</a><br><br>
        <a href="registration">Регистрация</a><br>
        <? }?>    
       
        <?php 
        if (!empty($_SESSION['user']['login']) && isset($_SESSION['user']['login'])){
            ?>
       
        <a class="new-article" href="newarticle">Добавить статью</a></br></br>
        <? }?>        
       
        
        <?php
        if (!empty($_SESSION['user']['login']) && isset($_SESSION['user']['login'])){
        ?>
        <span>Ваш логин - </span>
        <span><?= $_SESSION['user']['login']?></span><br>
        <a href="/login/signout">Выйти</a>
        
        <?php 

        }
        ?>
    </div>
    <h1>Статьи наших пользователей</h1>

    <div class="news">
    <?php 
        foreach($data as $row){
    ?>
        
        <div class="news-item">
            <p><?= $row[1]?></p>
            <p><?= $row[2]?></p>
            <p>Author - <?= $row[4]?></p>
            <!-- <p>ID autor-<?= $row[3]?><br> -->
            <a href="/article?id=<?= $row[0]?>">Читать</a><br><br>
            <?php

            if($_SESSION['user']['id'] == $row[3]){?>
                <a href="/article/delete?id=<?= $row[0]?>">Удалить</a></td><br>
                <a href="/update?id=<?= $row[0]?>">Редактировать</a></td>
                
           <?php } ?>
        </div>    
    <?php } ?>
    </div>
