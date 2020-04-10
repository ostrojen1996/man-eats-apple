<?php
namespace models;

use interfaces\Food as FoodInterface;

/**
 * Класс обьекта для хранилища
 */
class Food implements FoodInterface
{
    protected $isEdible = true;
    protected $isBitten = false;
    protected $volume = 1;
    protected $name;

    function __construct(array $config = [])
    {
        if(isset($config['isEdible'])){
            $this->isEdible = boolval($config['isEdible']);
        }
        if(isset($config['isBitten'])){
            $this->isBitten = boolval($config['isBitten']);
        }
        if(isset($config['name'])){
            $this->name = $config['name'];
        }
        if(isset($config['volume'])){
            $this->volume = $config['volume'];
        }
    }

    /**
     * 
     * @return bool
     */
    public function isEdible(): bool
    {
        return $this->isEdible;
    }

    /**
     * 
     * @return bool
     */
    public function isBitten():bool
    {
        return $this->isBitten;
    }

    /**
     * 
     * @return bool
     */
    public function canBite(): bool
    {
        return $this->volume > 0;
    }

    public function bite()
    {
        $this->volume--;
        $this->isBitten = true;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
