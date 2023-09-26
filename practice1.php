<?php
//Example
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

//Calculate the total price of items in a shopping cart.
$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$string = "This is a poorly written program with little
structure and readability.";

//Remove spaces and convert a string to lowercase.
$modifiedString = removeSpacesAndConvertToLowercase($string);
echo "\nModified string: " . $modifiedString;

function removeSpacesAndConvertToLowercase(string $string): string {
    $string = str_replace(' ', '', $string);
    return strtolower($string);
}

//Check if a number is even or odd.
$number = 42;
$numberType = checkEvenOrOdd($number);
echo "\nThe number " . $number . " is " . $numberType . ".";

function checkEvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}