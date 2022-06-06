    <a href="main">На главную</a>
    <h1>Новая статья</h1>
    <form action="/newarticle/create" method="POST">
        <p>Название</p>
        <input type="text" name="title">
        <p>Текст статьи</p>
        <textarea name="description" rows="4" cols="50"></textarea>
        <input type="submit" value="Опубликовать">
        <?htmlspecialchars($_POST['description']);?>
    </form>
