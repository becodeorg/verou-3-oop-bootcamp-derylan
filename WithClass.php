<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Market
{
    public $product;
    public $quantity;
    public $price;

    public function __construct(string $product, int $quantity, float $price)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function totalAmount() 
    {
        return $this->quantity * $this->price;
    }

    public function foodTax()
    {
        return $this->quantity * $this->price * 0.06; 
    }

    public function alcoholTax()
    {
        return $this->quantity * $this->price * 0.21;
    }
}

$banana = new Market('Banana', 6, 1);
$apple = new Market('Apple', 3, 1.5);
$wine = new Market('Wine', 2, 10);

echo "The total amount without is: € ";
echo $banana->totalAmount() + $apple->totalAmount() + $wine->totalAmount(); 
echo ". <br>";
echo "The total tax amount is: € ";
echo $banana->foodTax() + $apple->foodTax() + $wine->alcoholTax();
echo ".";
?>