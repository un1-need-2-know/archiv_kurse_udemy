<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;

    protected function setUp(): void
    {
        $this->article = new App\Article();
    }

    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->getTitle());
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $this->assertSame($this->article->getSlug(), '');
    }

    public function titleProvider()
    {
        return [
            'Replace Spaces with Underscores' => ['Graf Prono blaest zum Zapfenstreich', 'Graf_Prono_blaest_zum_Zapfenstreich'],
            'Replace multiple Spaces with only one Underscore' => ["Graf  Prono   blaest    zum \n Zapfenstreich", 'Graf_Prono_blaest_zum_Zapfenstreich'],
            'Remove Underscore @ the start/end' => ["  Graf  Prono   blaest    zum \n Zapfenstreich  ", 'Graf_Prono_blaest_zum_Zapfenstreich'],
            'Remove non word characters' => ['Graf Prono? Blaest zum Zapfenstreich!', 'Graf_Prono_Blaest_zum_Zapfenstreich'],
        ];
    }

    /**
     * @dataProvider titleProvider
     */
    public function testSlug($title, $slug)
    {
        $this->article->setTitle($title);

        $this->assertSame($this->article->getSlug(), $slug);
    }    
}
