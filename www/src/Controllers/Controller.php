<?php

namespace App\Controllers;

use App\Core\View;
use App\Manager\Articles;

abstract class Controller
{
    /**
     * @var $article contient new Articles
     */
    protected $article;

    /**
     * @var $view contient new View
     */
    protected $view;

    public function __construct()
    {
        $this->article = new Articles();
        $this->view = new View();
    }
}