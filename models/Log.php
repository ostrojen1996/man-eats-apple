<?php
namespace models;

use interfaces\Log as LogInterface;

/**
 * Класс логирования действий
 *
 */
class Log implements LogInterface
{
    /**
     * 
     * @param string $text
     */
    public function write(string $text)
    {
        print_r($text.PHP_EOL);
    }
}
