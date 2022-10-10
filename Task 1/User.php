<?php

class User
{
    private ?string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

    private function __construct(private string $username, private string $email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->dateCreated = new DateTime(); // Текущие дата и время
    }

    function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): void
    {
        $this->sex = $sex;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): void
    {
        $this->age = $age;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


}