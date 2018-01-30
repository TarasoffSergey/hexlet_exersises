<?php
/*
 * Реализуйте в классе Shop\Cart следующие методы:
 *
 * add - для добавления товаров в корзину
 * count - для получения количества товаров в корзине
 * total - для получения общей суммы товаров в корзине
 * remove - для удаления товара из корзины по id
 * clear - для очистки корзины
 * Пример:
 *
 * use Shop\Cart;
 *
 * $cart = new Cart();
 *
 * $cart->add(new Item(1, "milk", 5))
 * $cart->add(new Item(2, "water", 2));
 *
 * $cart->count(); // 2
 * $cart->total(); // 7
 *
 * $cart->remove(2);
 *
 * $cart->count(); // 1
 * $cart->total(); // 5
 *
 * $cart->clear();
 *
 * $cart->count(); // 0
 * $cart->total(); // 0
 */
namespace Shop;

class Item
{
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}

class Cart
{
    private $items = [];

    // BEGIN (write your solution here)
    public function add(Item $item)
    {
        $this->items[] = $item;
    }
    // END
}

use Shop\Cart;

$cart = new Cart();

$cart->add(new Item(1, "milk", 5));
