<?php
namespace interfaces;

/**
 * Интерфейс класа логирования
 */
interface Log
{
    /**
     * Вывод текста
     * @param string $text
     */
    public function write(string $text);
}
