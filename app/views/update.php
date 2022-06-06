<?php
    require_once 'app/config/connect.php';
    $article_id = $_GET['id'];
    
?>
<body>
    <h2>Update article</h2>
    <? foreach($data as $row)
    {?>
    <form action="/update/update" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id']?>">    
        <p>Title</p>
        <input type="text" name="title" value="<?= $row[1]?>">
        <p>Description</p>
        <textarea name="description" rows="4" cols="50"><?= $row[2]?></textarea>
        <button type="submit">Update</button>
        <?htmlspecialchars($_POST['description']);?>
    </form>
    <? }?>
</body>
</html>