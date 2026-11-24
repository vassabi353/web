<?php
declare(strict_types=1);

namespace MyProject\Classes;

/**
 * Абстрактный класс пользователя.
 *
 * Задаёт общий контракт для всех типов пользователей.
 */
abstract class AbstractUser
{
    /**
     * Выводит информацию о пользователе.
     *
     * @return void
     */
    abstract public function showInfo(): void;
}

