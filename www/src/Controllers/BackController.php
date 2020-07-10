<?php

namespace App\Controllers;

use App\Core\Parameter;



class BackController extends Controller
{

    /**
     * @var $post
     */
    public function newArticle(Parameter $post)
    {
        if ($post->getParam('submit')) {
            $this->article->newArticle($post);
            header('Location: ../public/index.php');
        }

        return $this->view->render('new_article', [
            'post' => $post,
        ]);
    }
}