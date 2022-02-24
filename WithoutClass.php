<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$basket = [
    ['name' => 'Banana', 'quantity' => 6, 'price' => 1 ],
    ['name' => 'Apple', 'quantity' => 3, 'price' => 1.5 ],
    ['name' => 'Wine', 'quantity' => 2, 'price' => 10 ],
];

function totalPrice($basket) {
    
    $totalAmount = 0;
    foreach($basket as $item) {
        // var_dump($i);
        $totalAmount += $item['quantity'] * $item['price'];
    };
    return $totalAmount;
};
echo 'Total amount without tax is: €'; 
echo totalPrice($basket); 
echo '. <br>';

function totalTax($basket) {

    $tax = 0;
    foreach ($basket as $item) {
        if ($item == 'Banana' || $item == 'Apple') {
            $priceCurrentItem = $item['quantity'] * $item['price'] * 1.06;
        } else {
            $priceCurrentItem = $item['quantity'] * $item['price'] * 1.21;
        }
        $tax += $priceCurrentItem;
    };
    return $tax;
};
echo 'Total amount with tax is: € ';
echo totalTax($basket);
echo '.';

//Trying a different approach

// $products = [
//     ['name' => 'Banana', 'quantity' => 6, 'price' => 1, 'alcohol' => 'false' ],
//     ['name' => 'Apple', 'quantity' => 3, 'price' => 1.5, 'alcohol' => 'false' ],
//     ['name' => 'Wine', 'quantity' => 2, 'price' => 10, 'alcohol' => 'true' ],
// ];

// $amountTotal = [];
// $tax = [];
// foreach($products as $item) {
//     array_push($amountTotal, $item['quantity'] * $item['price']);
//     if ('alcohol' == 'false') {
//         array_push($tax, $amountTotal * 0.06);
//     } else {

//     }
// }

?>