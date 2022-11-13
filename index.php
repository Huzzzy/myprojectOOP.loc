<?php
class Post
{
    protected $title;
    protected $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    //Заголовок
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    //Содержание
    public function getText()
    {
        return $this->text;
    }
    public function setText($text): void
    {
        $this->text = $text;
    }
}

class Lesson extends Post
{
    private $homework;

    public function __construct(string $title, string $text, string $homework)
    {
        parent::__construct($title, $text);
        $this->homework = $homework;
    }

    //Домашка
    public function getHomework(): string
    {
        return $this->homework;
    }
    public function setHomework(string $homework): void
    {
        $this->homework = $homework;
    }
}


$lesson = new Lesson('Заголовок', 'Текст', 'Домашка');
echo 'Название урока: ' . $lesson->getTitle();