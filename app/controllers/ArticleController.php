<?php

class ArticleController extends Controller
{
    function __construct()
    {
        $this->model = new ArticleModel();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('article.php', 'template.php', $data);
    }

    function action_delete()
    {
        if (require_once 'app/config/connect.php') {
            $article_id = $_GET['id'];
            mysqli_query($connect, "DELETE FROM `news` WHERE `news`.`id` = '$article_id'");
        }
        echo '<script>
                location.href= "/main";
                </script>';
    }
}
