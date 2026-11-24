<?php
declare(strict_types=1);

namespace MyProject\Classes;

require_once __DIR__ . '/User.php';

/**
 * Класс супер-пользователя (пользователь с ролью).
 */
class SuperUser extends User implements SuperUserInterface
{
    /** @var string Роль пользователя */
    public string $role;

    /** @var int Количество созданных объектов класса SuperUser */
    public static int $count = 0;

    /**
     * Конструктор.
     *
     * @param string $name     Имя пользователя
     * @param string $login    Логин пользователя
     * @param string $password Пароль пользователя
     * @param string $role     Роль пользователя
     */
    public function __construct(string $name, string $login, string $password, string $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }

    /**
     * Выводит информацию о пользователе вместе с ролью.
     *
     * @return void
     */
    public function showInfo(): void
    {
        echo "Имя: {$this->name}, логин: {$this->login}, роль: {$this->role}" . PHP_EOL;
    }

    /**
     * Возвращает свойства объекта в виде ассоциативного массива.
     *
     * @return array<string, string>
     */
    public function getInfo(): array
    {
        return [
            'name'     => $this->name,
            'login'    => $this->login,
            'password' => $this->password,
            'role'     => $this->role,
        ];
    }
}

