<?php


class Articles extends Database
{
    public function getArticles()
    {
  
        $request = 'SELECT id, title, content, status, created, updated FROM Articles ORDER BY created DESC';
        return $this->createQuery($request);
    }

    public function getArticle( Int $artId)
    {

        $request = 'SELECT id, title, content, status, created, updated FROM Articles WHERE id = ?';
        return $this->createQuery($request, [$artId]);

    }
}