<?php
namespace interfaces;

/**
 * Интерфейс класса еды
 */
interface Food
{
    /**
     * Можно ли её есть
     * @return bool
     */
    public function isEdible():bool;

    /**
     * Уже откушено
     * @return bool
     */
    public function isBitten():bool;

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
     * Получить название
     * @return bool
     */
    public function getName():string;
}

