<?php

namespace App\Controllers;

use App\Manager\Articles;
use App\Core\View;

class BackController
{

    /**
     * @param $view
     */
    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * @var $post
     * Méthode d'ajout d'un nouvel article via la méthode POST
     */
    public function newArticle($post)
    {
        if (isset($post['submit'])) {
            $article = new Articles();
            $article->newArticle($post);
            header('Location : ../public/index.php');
        }

        return $this->view->render('new_article', [
            'post' => $post,
        ]);
    }
}