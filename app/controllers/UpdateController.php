<?php

class UpdateController extends Controller
{

    function __construct()
    {
        $this->model = new UpdateModel();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('update.php', 'template.php', $data);
    }

    function action_update()
    {
        if (require_once 'app/config/connect.php') {

            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            echo $description;
            mysqli_query($connect, "UPDATE `news` SET `title` = '$title', `description` = '$description' WHERE `news`.`id` = '$id'");

            echo '<script>
                location.href= "/main";
                </script>';
        }
    }
}
