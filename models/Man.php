<?php
namespace models;

use interfaces\{
    Food,
    Log
};

/**
 * Класс человека
 *
 * TODO: реализовать storage для хранения предметов (яблока)
 */
class Man
{

    private $log;

    function __construct(Log $log)
    {
        $this->log = $log;
    }

    public function eat(Food $food): self
    {
        if($food->isEdible()){
            if($food->isBitten()){
                $this->log->write('"'.$food->getName().'" уже откушено');
            } else {
                do {
                    $this->log->write('Укусили "' . $food->getName() . '"');
                    $food->bite();
                } while ($food->canBite());
                $this->log->write('Сьели "' . $food->getName() . '"');
            }
        } else {
            $this->log->write('"'.$food->getName().'" не сьедобно');
        }

        return $this;
    }

}
