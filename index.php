<?php

interface Product
{
    public function getId(): int;
    public function getName(): string;
    public function getPrice(): string;
}

class Coffee implements Product
{
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }
}

class CoffeeShop
{
    private $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}

class Menu
{
    public function viewMenu(array $products)
    {
        $output = '';

        foreach ($products as $product) {
            $output .= $product->getName() . ' - $' . $product->getPrice() . PHP_EOL;
        }

        return $output;
    }
}

$coffeeProducts = [
    new Coffee(1, 'Negro', '25'),
    new Coffee(2, 'Latté', '35'),
    new Coffee(3, 'Capuchino', '45'),
    new Coffee(4, 'Expreso', '55'),
];

$shop = new CoffeeShop;

foreach ($coffeeProducts as $coffeeProduct) {
    $shop->addProduct($coffeeProduct);
}

$menu = new Menu;

echo $menu->viewMenu($shop->getProducts());
?>