<?php

class Task
{
    private ?string $description;
    public ?string $dateCreated;
    private ?string $dateUpdated;
    private ?string $dateDone;
    private ?int $priority;
    private ?bool $isDone;

    public function __construct() {
    }

    public function markAsDone(): void
    {
        $this->isDone = true;
        $date = new DateTime();
        $this->dateUpdated = $date->format('d.m.Y H:i:s');
        $this->dateDone = $date->format('d.m.Y H:i:s');
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
        $date = new DateTime();
        $this->dateCreated = $date->format('d.m.Y H:i:s');
    }

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function setDateCreated(?string $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    public function getDateUpdated(): ?string
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(?string $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    public function getDateDone(): ?string
    {
        return $this->dateDone;
    }

    public function setDateDone(?string $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): void
    {
        $this->priority = $priority;
    }

    public function getIsDone(): ?bool
    {
        return $this->isDone;
    }

    public function setIsDone(?bool $isDone): void
    {
        $this->isDone = $isDone;
    }

}