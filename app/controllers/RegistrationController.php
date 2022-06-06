<?php

class RegistrationController extends Controller
{
    function action_index()
    {   
        $this->view->generate('registration.php', 'template.php');
        if ($_POST['full_name']){
            $this->action_register();
        }
    }

    function action_register(){
        require_once 'app/config/connect.php';
        $full_name = $_POST['full_name'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $password_coonfirm = $_POST['password_confirm'];

        if ($password === $password_coonfirm){

            $password = md5($password);
        
            mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `password`) VALUES (NULL, '$full_name', '$login', '$password')");
            $_SESSION['message'] = 'Успешная регистрация!';
            echo '<script>
            location.href= "/login";
            </script>';
            
            
        }else{
            $_SESSION['message'] = 'Пароли не совпадают!';
            echo '<script>
            location.href= "/registration";
            </script>';
        }
    }
}