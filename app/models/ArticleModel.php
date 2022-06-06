<?php

class ArticleModel extends Model
{
    public function get_data()
    {
        if (require_once 'app/config/connect.php'){
            $id_news = $_GET['id'];
            $news = mysqli_query($connect, "SELECT news.*, users.login FROM `news` LEFT JOIN `users` ON news.id_author = users.id where news.id = '$id_news'");
            $news = mysqli_fetch_all($news);
            return $news;
        };
        
    }
}