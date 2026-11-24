<?php
declare(strict_types=1);

namespace MyProject\Classes;

/**
 * Класс обычного пользователя.
 */
class User extends AbstractUser
{
    /** @var string Имя пользователя */
    public string $name;

    /** @var string Логин пользователя */
    public string $login;

    /** @var string Пароль пользователя */
    protected string $password;

    /** @var int Количество созданных объектов класса User */
    public static int $count = 0;

    /**
     * Конструктор.
     *
     * @param string $name     Имя пользователя
     * @param string $login    Логин пользователя
     * @param string $password Пароль пользователя
     */
    public function __construct(string $name, string $login, string $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;

        static::$count++;
    }

    /**
     * Деструктор: сообщает об удалении пользователя.
     */
    public function __destruct()
    {
        echo "Пользователь {$this->login} удален" . PHP_EOL;
    }

    /**
     * Выводит информацию о пользователе.
     *
     * @return void
     */
    public function showInfo(): void
    {
        echo "Имя: {$this->name}, логин: {$this->login}" . PHP_EOL;
    }
}
