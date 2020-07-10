<?php

namespace App\Controllers;

class ErrController extends Controller
{

    public function errNotFound()
    {
        require '../templates/error_404.php';
    }

    Public function errServer()
    {
        require '../templates/error_500.php';
    }
}
