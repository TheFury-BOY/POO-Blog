<?php

namespace App\Core;

use Exception;
use App\Controllers\ErrController;
use App\Controllers\FrontController;

class Router
{
    /**
     * @param $frontController
     */
    private $frontController;

    /**
     * @param $errController
     */
    private $errController;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->ErrController = new ErrController();
    }


    public function run()
    {
        try{
            if(isset($_GET['route'])) {
                if($_GET['route'] === 'article'){
                    $this->frontController->article($_GET['articleId']);
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