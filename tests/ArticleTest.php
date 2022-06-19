<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;

    protected function setUp(): void
    {
        $this->article = new App\Article;
    }

    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->getTitle());
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $this->assertSame($this->article->getSlug(), '');
    }
}
