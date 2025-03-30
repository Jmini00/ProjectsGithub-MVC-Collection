<?php

namespace App\Entity;

class User
{
    private int $id;
    private string $username;
    private string $password;
    private int $userlike;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getUserlike(): int
    {
        return $this->userlike;
    }

    public function setUserlike(int $userlike): void
    {
        $this->userlike = $userlike;
    }
}
