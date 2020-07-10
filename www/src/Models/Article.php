<?php

namespace App\Models;

class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \Date
     */
    private $status;

    /**
     * @var \Date
     */
    private $created;

    /**
     * @var \Date
     */
    private $updated;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \Date
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \Date $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return \Date
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \Date $createdAt
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}