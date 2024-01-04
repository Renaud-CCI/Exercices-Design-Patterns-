<?php

namespace Tests;

use App\Builder\Inventory;
use App\Builder\Master;
use App\Builder\MealBuilder;
use App\Builder\Ingredients\Vege;
use App\Builder\Ingredients\Chicken;
use App\Builder\Ingredients\Sprite;
use App\Builder\Ingredients\Wather;
use App\Builder\Interfaces\MasterInterface;
use App\Builder\Interfaces\MenuInterface;

use PHPUnit\Framework\TestCase;

class MealBuilderTest extends TestCase
{
    /**
     * @var MasterInterface
     */
    private $master;

    /**
     * @var MenuInterface
     */
    private $menu;

    protected function setUp(): void
    {
        $this->master = new Master();
        $this->master->setBuilder(new MealBuilder());
        $this->master->getBuilder()
            ->setItem(new Chicken(Inventory::CHICKEN))
            ->setItem(new Vege(Inventory::VEGE))
            ->setItem(new Sprite(Inventory::SPRITE))
            ->setItem(new Wather(Inventory::WATHER));

        $this->menu = $this->master->build();
    }

    
    public function testInstance()
    {
        $this->assertInstanceOf(MenuInterface::class, $this->menu);
    }

    public function testItems()                                     
    {
        $this->assertEquals(Inventory::CHICKEN, $this->menu->getComponent(Chicken::class)->getItem());
        $this->assertEquals(Inventory::VEGE, $this->menu->getComponent(Vege::class)->getItem());
        $this->assertEquals(Inventory::SPRITE, $this->menu->getComponent(Sprite::class)->getItem());
        $this->assertEquals(Inventory::WATHER, $this->menu->getComponent(Wather::class)->getItem());
    }                                                                            
    public function testMenus() 
    {
        $this->master->getBuilder()
            ->eraseMenu()
            ->setItem(new Vege(Inventory::VEGE))
            ->setItem(new Wather(Inventory::WATHER));
        $this->assertInstanceOf(MenuInterface::class, $this->master->build());
        $this->master->getBuilder()
            ->eraseMenu()
            ->setItem(new Chicken(Inventory::CHICKEN))
            ->setItem(new Sprite(Inventory::SPRITE));
        $this->assertInstanceOf(MenuInterface::class, $this->master->build());
    }
}