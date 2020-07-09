<?php

namespace App\Controllers;

use App\Core\View;
use App\Manager\Articles;

class FrontController
{

    private $article;

    public function __construct()
    {
        $this->article = new Articles();
        $this->view = new View();
    }

    public function home()
    {
        $articles = $this->article->getArticles();

        return $this->view->render('home', [
            'articles' => $articles,
        ]);
    }

    public function article(Int $artId)
    {
        $article = $this->article->getArticle($artId);

        return $this->view->render('single', [
            'article' => $article,
        ]);
    }
}