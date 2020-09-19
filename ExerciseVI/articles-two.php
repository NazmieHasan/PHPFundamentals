<?php

class Article {
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $content;
    /**
     * @var string
     */
    private $author;

    /**
     * Article constructor.
     * @param string $title
     * @param string $content
     * @param string $author
     */
    public function __construct($title, $content, $author)
    {
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAuthor($author);
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
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function __toString() {
        return $this->getTitle()." - " . $this->getContent().": " . $this->getAuthor().PHP_EOL;
    }
}

$articles = [];
$articleCount = intval(readline());
for ($i = 0; $i < $articleCount; $i++) {
    $input = readline();
    $tokens = explode(", ", $input);
    $title = $tokens[0];
    $content = $tokens[1];
    $author = $tokens[2];
    $article = new Article($title, $content, $author);
    $articles[] = $article;
}
$criteria = readline();

usort ($articles, function (Article $art1, Article $art2) use ($articles, $criteria) {
    if ($criteria === "title") {
        return $art1->getTitle()<=>$art2->getTitle();
    }
    else if ($criteria === "content") {
        return $art1->getContent()<=>$art2->getContent();
    }
    else if ($criteria === "author") {
        return $art1->getAuthor()<=>$art2->getAuthor();
    }
    else return "";
});

foreach ($articles as $article) {
    echo $article;
}