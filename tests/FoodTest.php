<?php

use PHPUnit\Framework\TestCase;
use models\Food;


final class FoodTest extends TestCase
{
    
    /**
     * Предполагаю что в тз имелось введу наличия яблока у Man,
     * в будущем будет добавлена реализацию хранилища у Man
     * и тогда проверять есть ли яблоко у человека
     * 
     * @return void
     */
    public function testExistApple(): void
    {
        $this->markTestIncomplete('Этот тест ещё не реализован.');
    }

    /**
     * 
     * @return void
     */
    public function testCanBiteApple(): void
    {
        $apple = new Food([
            'volume'   => 3,
            'name'     => 'Apple'
        ]);
        $this->assertTrue($apple->canBite());
    }

    /**
     * 
     * @return void
     */
    public function testFactBitingApple(): void
    {
        $apple = new Food([
            'volume'   => 3,
            'name'     => 'Apple'
        ]);
        $apple->bite();
        $this->assertTrue($apple->isBitten());
    }

}

