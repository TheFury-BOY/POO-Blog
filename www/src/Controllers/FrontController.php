<?php

namespace App\Controllers;

use App\Manager\Articles;

class FrontController
{

    private $article;

    public function __construct()
    {
        $this->article = new Articles();
    }

    public function home()
    {
        $articles = $this->article->getArticles();

        require '../templates/home.php';
    }

    public function article(Int $artId)
    {
        $article = $this->article->getArticle($artId);

        require '../templates/single.php';
    }
}