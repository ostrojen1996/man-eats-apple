<?php
namespace models;

use interfaces\Food as FoodInterface;

/**
 * Абстрактный класс еды
 */
abstract class Food implements FoodInterface
{
    protected $isEdible = true;
    protected $isBitten = false;
    protected $countBite = 1;
    protected $name = 'Food';

    /**
     * 
     * @param string $edible
     * @return self
     */
    public function setEdible(bool $edible): self
    {
        $this->isEdible = $edible;
        return $this;
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
     * @param string $bitten
     * @return self
     */
    public function setBitten(bool $bitten): self
    {
        $this->isBitten = $bitten;
        return $this;
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
        return $this->countBite > 0;
    }

    /**
     * 
     * @return self
     */
    public function bite(): self
    {
        $this->countBite--;
        $this->setBitten(true);
        return $this;
    }

    /**
     * 
     * @param string $countBite
     * @return self
     */
    public function setCountBite(int $countBite): self
    {
        $this->countBite = $countBite;
        return $this;
    }

    /**
     * 
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
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
