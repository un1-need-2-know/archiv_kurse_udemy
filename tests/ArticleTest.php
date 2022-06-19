<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    public function testTitleIsEmptyByDefault()
    {
        $article = new App\Article();

        $this->assertEmpty($article->getTitle());
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $article = new App\Article();

        $this->assertEquals($article->getSlug(), '');
    }
}
