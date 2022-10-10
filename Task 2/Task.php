<?php

class Task
{
    public DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private ?bool $isDone = false;
    private array $comments = [];

    public function __construct(User $user, string $description, int $priority = 1) {
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
        $this->setDateCreated(new DateTime());
    }

    public function markAsDone(): void
    {
        $this->setIsDone();
        $this->setDateUpdated(new DateTime);
        $this->setDateDone(new DateTime);
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime);
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    public function setDateDone(DateTime $dateDone): void
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
        $this->isDone = true;
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }


    public function setComments(Comment $comment): void
    {
        $this->comments[] = $comment;
    }

}