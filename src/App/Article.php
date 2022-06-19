<?php

namespace App;

class Article
{
    private $title;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getSlug()
    {
        $slug = $this->title;

        $slug = preg_replace('/\s/', '_', $slug);

        return $slug;
    }
}
