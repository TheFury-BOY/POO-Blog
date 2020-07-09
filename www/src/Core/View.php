<?php

namespace App\Core;

class View
{

    private $file;

    private $title;

    public function render(String $template, Array $data = [])
    {
        $this->file ='../templates/' . $template . '.php';
        $content = $this->renderFile($this->file, $data);
        $view = $this->renderFile('../templates/base.php', [
            'title' => $this->title,
            'content' => $content,
        ]);
        echo $view;   
    }

    public function renderFile(String $file, Array $data)
    {
        if (file_exists($file)) {
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        }

        header('Location : index.php?route=notFound');
    }
}