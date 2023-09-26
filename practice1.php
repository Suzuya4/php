<?php
//Calculate the total price of items in a shopping cart.

function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}


//Remove spaces and convert a string to lowercase.

function removeSpacesAndConvertToLowercase(string $string): string {
    $string = str_replace(' ', '', $string);
    return strtolower($string);
}


//Check if a number is even or odd.

function checkEvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

//Example
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

$string = "This is a poorly written program with little
structure and readability.";

$modifiedString = removeSpacesAndConvertToLowercase($string);
echo "\nModified string: " . $modifiedString;

$number = 42;
$numberType = checkEvenOrOdd($number);
echo "\nThe number " . $number . " is " . $numberType . ".";