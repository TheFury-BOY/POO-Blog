<?php

namespace App\Core;

class Request
{
    /**
     * @var $get contient $_GET
     */
    private $get;

    /**
     * @var $post contient $_POST
     */
    private $post;

    /**
     * @var $session contient $_SESSION
     */
    private $session;

    public function __construct()
    {
        $this->get = new Parameter($_GET);
        $this->post = new Parameter($_POST);
        $this->session = $_SESSION;
    }

    /**
     * @return Parameter
     */
    public function getGet()
    {
        return $this->get;
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @return mixed
     */
    public function getSession()
    {
        return $this->session;
    }

    
}