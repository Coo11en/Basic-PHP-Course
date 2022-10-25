<?php

class Task
{
    public bool $isDone = false;
    public string $description;

    public function __construct(string $description) {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isDone(): bool
    {
        return $this->isDone;
    }

    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

}