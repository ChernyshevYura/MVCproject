<?php

class LoginController extends Controller
{

    function action_index()
    {
        $this->view->generate('login.php', 'template.php');
        if ($_POST['login']){
            $this->action_signin();
        }
    }

    function action_signin()
    {
        require_once 'app/config/connect.php';

        $login = $_POST['login'];
        $password = md5($_POST['password']);


        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

        if (mysqli_num_rows($check_user) > 0) {

            $user = mysqli_fetch_assoc($check_user);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "login" => $user['login'],
            ];
            echo '<script>
            location.href= "/main";
            </script>';
        } else {
            $_SESSION['message'] = 'Не верный логин или пароль!';
            echo '<script>
            location.href= "/login";
            </script>';
        }
    }

    function action_signout()
    {
        unset($_SESSION['user']);        

        echo '<script>
            location.href= "/main";
            </script>';
    }
}
