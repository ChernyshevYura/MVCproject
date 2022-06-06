<?php

class UpdateModel extends Model
{
    public function get_data()
    {
        if (require_once 'app/config/connect.php'){
            $id_news = $_GET['id'];
            $news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$id_news'");
            $news = mysqli_fetch_all($news);
            return $news;
        };
        
    }
}