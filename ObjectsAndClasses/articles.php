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
$input = readline();
$tokens = explode(", ", $input);
$title = $tokens[0];
$content = $tokens[1];
$author = $tokens[2];
$article = new Article($title, $content, $author);

$commandCount = intval(readline());

for ($i = 0; $i < $commandCount; $i++) {
    $input = readline();
    $tokens = explode(": ", $input);
    $command = $tokens[0];
    $data = $tokens[1];
    if ($command === "Edit") {
        $article->setContent($data);
    } else if ($command === "ChangeAuthor") {
        $article->setAuthor($data);
    } else if ($command === "Rename") {
        $article->setTitle($data);
    } else {
        continue;
    }
}
echo $article;