<?php

class NewarticleController extends Controller
{
    function action_index()
    {
        $this->view->generate('newarticle.php', 'template.php');
    }

    function action_create()
    {
        if (require_once 'app/config/connect.php') {
            echo $_SESSION['user']['id'];
            $user_id = $_SESSION['user']['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];

            echo $title;
            echo $description;

            mysqli_query($connect, "INSERT INTO `news` (`id`, `title`, `description`, `id_author`) VALUES (NULL, '$title', '$description', '$user_id')");

            echo '<script>
            location.href= "/main";
            </script>';
        }
    }
}
