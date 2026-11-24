<?php
declare(strict_types=1);

use MyProject\Classes\SuperUser;
use MyProject\Classes\User;

header('Content-Type: text/plain; charset=utf-8');

/**
 * Автозагрузка классов из каталога MyProject/Classes
 * по полному имени класса (namespace MyProject\Classes).
 *
 * @param string $class Полное имя загружаемого класса
 */
spl_autoload_register(function (string $class): void {
    $prefix = 'MyProject\\Classes\\';

    if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
        return;
    }

    $file = __DIR__ . '/MyProject/Classes/' . substr($class, strlen($prefix)) . '.php';

    if (is_file($file)) {
        require_once $file;
    }
});

$user1 = new User('Максим', 'Maks123', 'pass1');
$user2 = new User('Андрей', 'Andrei', 'pass2');
$user3 = new User('Мария', 'qwerty', 'pass3');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser('Админ', 'admin', 'root', 'administrator');
$user->showInfo();

print_r($user->getInfo());

echo 'Всего обычных пользователей: ' . User::$count . PHP_EOL;
echo 'Всего супер-пользователей: ' . SuperUser::$count . PHP_EOL;
