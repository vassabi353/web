<?php
declare(strict_types=1);

namespace MyProject\Classes;

/**
 * Интерфейс супер-пользователя.
 */
interface SuperUserInterface
{
    /**
     * Возвращает данные объекта в виде ассоциативного массива.
     *
     * @return array<string, string> имя свойства => значение свойства
     */
    public function getInfo(): array;
}

