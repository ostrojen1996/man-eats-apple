<?php
namespace interfaces;

/**
 * Интерфейс класса еды
 */
interface Food
{
    /**
     * Установить сьедобность
     * @param bool $edible
     */
    public function setEdible(bool $edible);

    /**
     * Можно ли её есть
     * @return bool
     */
    public function isEdible():bool;

    /**
     * Установить состояние
     * @param bool $bitten
     */
    public function setBitten(bool $bitten);

    /**
     * Уже откушено
     * @return bool
     */
    public function isBitten():bool;

    /**
     * Установить количество кусков
     */
    public function setCountBite(int $countBite);

    /**
     * Можно ли укусить
     * @return bool
     */
    public function canBite():bool;

    /**
     * Откусить
     */
    public function bite();

    /**
     * Установить название
     * @param string $name
     */
    public function setName(string $name);

    /**
     * Получить название
     * @return bool
     */
    public function getName():string;
}

