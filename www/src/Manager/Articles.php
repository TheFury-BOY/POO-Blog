<?php

Namespace App\Manager;

use App\Models\Article;

class Articles extends Database
{
    private function buildObject($row)
    {
        $article = new Article();
        $article->setId($row['id']);
        $article->setTitle($row['title']);
        $article->setContent($row['content']);
        $article->setCreated($row['created']);
        $article->setUpdated($row['updated']);
        return $article;
    }

    public function getArticles()
    {
  
        $request = 'SELECT id, title, content, status, created, updated FROM Articles ORDER BY created DESC';
        $result = $this->createQuery($request);
        $articles = [];
        foreach ($result as $row) {
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }

    public function getArticle(Int $artId)
    {

        $request = 'SELECT id, title, content, status, created, updated FROM Articles WHERE id = ?';
        $result = $this->createQuery($request, [$artId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);

    }

    public function newArticle(Array $article)
    {
        //Permet de récupérer les variables $title et $content
        extract($article);
        $request = 'INSERT INTO Articles (title, content, status, created) VALUES (?, ?, ?, NOW())';
        $this->createQuery($request, [$post->getParam('title'), $post->getParam('content'), $post->getParam('status')]);
    }
}