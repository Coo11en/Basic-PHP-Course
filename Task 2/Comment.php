<?php

class Comment
{
//    public ?User $author;
//    public ?Task $task;
 //  public ?string $text;


    public function __construct(User $author, Task $task, string $text)
    {
    $this->author = $author;
    $this->task = $task;
    $this->text = $text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function getText(): string
    {
        return $this->text;
    }


}