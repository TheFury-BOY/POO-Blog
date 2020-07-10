<?php

namespace App\Controllers;



class FrontController extends Controller
{

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