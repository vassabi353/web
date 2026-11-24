<?php
declare(strict_types=1);

namespace MyProject\Classes;

class User extends AbstractUser
{
    public string $name;

    public string $login;

    protected string $password;

    public static int $count = 0;

    public function __construct(string $name, string $login, string $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;

        static::$count++;
    }

    public function __destruct()
    {
        echo "Пользователь {$this->login} удален" . PHP_EOL;
    }

    public function showInfo(): void
    {
        echo "Имя: {$this->name}, логин: {$this->login}" . PHP_EOL;
    }
}

