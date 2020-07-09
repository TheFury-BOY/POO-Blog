<?php

namespace App\Core;

use Exception;
use App\Controllers\ErrController;
use App\Controllers\BackController;
use App\Controllers\FrontController;

class Router
{
    /**
     * @param $frontController
     */
    private $frontController;

    /**
     * @param $backController
     */
    private $backController;

    /**
     * @param $errController
     */
    private $errController;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->ErrController = new ErrController();
    }


    public function run()
    {
        try{
            if(isset($_GET['route'])) {
                if($_GET['route'] === 'article'){
                    $this->frontController->article($_GET['articleId']);
                } elseif ($_GET['route']==='newArticle') {
                    $this->backController->newArticle($_POST);
                } else {
                    $this->errController->errNotFound();
                }
            } else {
                $this->frontController->home();
            }
        }
        catch (Exception $e) {
            $this->errController->errNotFound();
        }
    }
}