<?php

class User
{
    private ?string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

    public function __construct(private string $username, private string $email)
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



object(Task)#4 (6) {
    ["dateCreated"]=>object(DateTime)#5 (3) {
        ["date"]=>string(26) "2022-10-10 23:58:15.878255"
        ["timezone_type"]=>int(3)
        ["timezone"]=>string(13) "Europe/Moscow"
    }
    ["dateUpdated":"Task":private]=>uninitialized(DateTime)
    ["dateDone":"Task":private]=>uninitialized(DateTime)
    ["isDone":"Task":private]=>bool(false)
    ["comments":"Task":private]=>array(2) {
        [0]=>object(Comment)#6 (3) {
            ["author"]=>object(User)#2 (4) {
                ["sex":"User":private]=>uninitialized(?string)
                ["age":"User":private]=>uninitialized(?int)
                ["isActive":"User":private]=>bool(true)
                ["dateCreated":"User":private]=>object(DateTime)#3 (3) {
                    ["date"]=>string(26) "2022-10-10 23:58:15.878241"
                    ["timezone_type"]=>int(3)
                    ["timezone"]=>string(13) "Europe/Moscow"
                }
                ["username":"User":private]=>string(7) "Woollen"
                ["email":"User":private]=>string(16) "Coolen@yandex.ru"
            }
            ["task"]=>*RECURSION*
            ["text"]=>string(33) "Привет!!!!!!!!!!!!!!!!!!!!!"
        }
        [1]=>object(Comment)#7 (3) {
            ["author"]=>object(User)#2 (4) {
                ["sex":"User":private]=>uninitialized(?string)
                ["age":"User":private]=>uninitialized(?int)
                ["isActive":"User":private]=>bool(true)
                ["dateCreated":"User":private]=>object(DateTime)#3 (3) {
                    ["date"]=>string(26) "2022-10-10 23:58:15.878241"
                    ["timezone_type"]=>int(3)
                    ["timezone"]=>string(13) "Europe/Moscow"
                }
                ["username":"User":private]=>string(7) "Woollen"
                ["email":"User":private]=>string(16) "Coolen@yandex.ru"
            }
            ["task"]=>*RECURSION*
            ["text"]=>string(16) "Goodbay?????????"
        }
    }
  ["user"]=>
  object(User)#2 (4) {
  ["sex":"User":private]=>
    uninitialized(?string)
    ["age":"User":private]=>
    uninitialized(?int)
    ["isActive":"User":private]=>
    bool(true)
    ["dateCreated":"User":private]=>
    object(DateTime)#3 (3) {
    ["date"]=>
      string(26) "2022-10-10 23:58:15.878241"
["timezone_type"]=>
      int(3)
      ["timezone"]=>
      string(13) "Europe/Moscow"
    }
    ["username":"User":private]=>
    string(7) "Woollen"
["email":"User":private]=>
    string(16) "Coolen@yandex.ru"
  }
  ["description"]=>
  string(10) "Task 11111"
["priority"]=>
  int(3)
}
