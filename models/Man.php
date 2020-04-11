<?php
namespace models;

use models\Log;
use interfaces\{
    Food as FoodInterface,
    Log as LogInterface
};

/**
 * Класс человека
 *
 * TODO: реализовать storage для хранения предметов (яблока)
 */
class Man
{

    private $log;

    function __construct()
    {
        $this->log = new Log();
    }

    /**
     * 
     * @param Log $log
     * @return self
     */
    public function setLog(LogInterface $log): self
    {
        $this->log = $log;
        return $this;
    }

    /**
     * 
     * @param Food $food
     * @return self
     */
    public function eat(FoodInterface $food): self
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
