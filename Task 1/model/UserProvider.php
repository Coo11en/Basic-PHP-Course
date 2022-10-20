<?php

require_once 'UserRoot.php';

class UserProvider
{
    private array $accounts = [
        'Collen' => '1234'
    ];

    public function getByUsernameAndPassword(string $username, string $password): ?UserRoot
    {
        $expectedPassword = $this->accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return new UserRoot($username);
        }
        return null;
    }
}