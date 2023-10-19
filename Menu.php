<?php

class Menu
{

    public function viewMenu($products)
    {
        $menu = '';
        $menu .= 'Id' . " - " . 'Nombre' . " - " . 'Precio' . "<br>";
        $menu .= str_repeat('=', 30) . "<br>";

        foreach ($products as $product) {
            $menu .= $product['id'] . " - " . $product['name'] . " - " . $product['price'] . '<br>';
        }
        return $menu;
    }
}
