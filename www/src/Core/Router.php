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

    /**
     * @param $request
     */
    private $request;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->ErrController = new ErrController();
        $this->request = new Request();
    }


    public function run()
    {

        $route = $this->request->getGet()->getParam('route');
        try{
            if(isset($_GET['route'])) {
                if($_GET['route'] === 'article'){
                    $this->frontController->article($this->request->getGet()->getParam('articleId'));
                } elseif ($_GET['route']==='newArticle') {
                    $this->backController->newArticle($this->request->getPost());
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