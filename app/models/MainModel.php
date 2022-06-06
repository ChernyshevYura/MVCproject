<?php

class MainModel extends Model
{
    public function get_data()
    {
        if (require_once 'app/config/connect.php'){
            $articles = mysqli_query($connect, "SELECT news.*, users.login FROM `news` LEFT JOIN `users` ON news.id_author = users.id");
            $articles = mysqli_fetch_all($articles);
            return $articles;
        };
        
    }
}