<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " with barbecue sauce";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

// 2.Numbers
// Declaring a variable with an integer value
$integer_number = 5;
// Выводим значение переменной на терминал
echo $integer_number;

// Printing a new line
echo "\n";

// Declaring a floating-point variable
$float_number = 3.14;
// Output the value of the new variable to the terminal
echo $float_number;

// We print the number 12
echo 6 + 6;

// How much more did I spend last month than this month?
$last_month = 1187.23;
$this_month = 1089.98;

// We display the difference between expenses last month and this month
echo "\nDifference in expenses: " . ($last_month - $this_month);

// 3.Multiplication and division
// Creating a variable with the number of programming languages learned
$num_languages = 4;

// Creating a variable with the number of months spent on training
$months = 11;

// We assume that Meg was coding 16 days a month
$days_per_month = 16;

// Counting the total number of days spent on training
$days = $months * $days_per_month;

// Counting the number of days spent learning each language on average
$days_per_language = $days / $num_languages;

echo $days_per_language;

// 4.Degree
echo 8 ** 2; // Outputs 64

// 5.Assignment operators

// // Create the $my_name variable and assign any number to it
$my_num = 10;

// Creating the $answer variable and assigning it the value $my_number
$answer = $my_num;

// Use the addition assignment operator to add 2 to $answer
$answer += 2;

// We use the multiplication assignment operator to multiply $answer by 2
$answer *= 2;

// Using the assignment operator subtraction to subtract 2 from $answer
$answer -= 2;

// Use the division assignment operator to divide $answer by 2
$answer /= 2;

// We use the assignment subtraction operator to subtract the original number ($my_num) from $answer
$answer -= $my_num;

echo $answer;

// 6.Mathematical functions

//Find the remainder of dividing the variable $a by the variable $b:
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "The remainder of dividing $a by $b: $remainder";

//Checking the division of $a by $b without remainder
$a = 10;
$b = 3;
if ($a % $b == 0) {
    $result = $a / $b;
    echo "Divided, the result of division: $result";
} else {
    $remainder = $a % $b;
    echo "Divided with the remainder, the remainder of the division: $remainder";
}

// Raise the number 2 to the 10th power and find the square root of 245
$st = pow(2, 10);
$square_root_of_245 = sqrt(245);
echo "2 to the 10th power: $st, square root of 245: $square_root_of_245";

// Create an array and find the square root of the sum of the squares of its elements
$array = [4, 2, 5, 19, 13, 0, 10];
$sum_of_squares = 0;
foreach ($array as $value) {
    $sum_of_squares += $value ** 2;
}
$square_root_of_sum_of_squares = sqrt($sum_of_squares);
echo "The root of the sum of squares of the array elements: $square_root_of_sum_of_squares";

// Round the square root of 379 to whole, tenths, and hundredths
$square_root_of_379 = sqrt(379);
$rounded_integer = round($square_root_of_379);
$rounded_tenths = round($square_root_of_379, 1);
$rounded_hundredths = round($square_root_of_379, 2);
echo "Root of 379: $square_root_of_379, rounded root: $rounded_integer, up to ten: $rounded_tenths, up to a hundred: $rounded_hundredths";

// Finding the minimum and maximum numbers in this array
$array = [4, -2, 5, 19, -130, 0, 10];
$min = min($array);
$max = max($array);
echo "Minimum number: $min, maximum number: $max";

// Output a random number from 1 to 100
$random_number = rand(1, 100);
echo "Random number from 1 to 100: $random_number";

// Create an array of 10 random numbers

$random_numbers = [];
for ($i = 0; $i < 10; $i++) {
    $random_numbers[] = rand();
}
print_r($random_numbers);

// Find the modulus of the difference between the variables $a and $b
$a = 10;
$b = 7;
$absolute_difference = abs($a - $b);
echo "Modulus of difference between $a and $b: $absolute_difference";

// Convert the negative numbers of the array to positive ones
$array = [1, 2, -1, -2, 3, -3];
foreach ($array as &$value) {
    $value = abs($value);
}
unset($value); // disable the link to the last element
print_r($array);

// Find all the divisors of the number 30
$number = 30;
$divisors = [];
for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
        $divisors[] = $i;
    }
}
print_r($divisors);

// Find out how many of the first elements of the array need to be added so that the sum is more than 10
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$elements_to_sum = 0;
foreach ($array as $value) {
    $sum += $value;
    $elements_to_sum++;
    if ($sum > 10) {
        break;
    }
}
echo "We need to add up the first $elements_to_sum of the array elements so that the sum is greater than 10";

// 7.Functions

function printStringReturnNumber() {
    echo "This is a string.";
    return 52; // Any numeric value
}

// Calling the function and writing the return value to a variable
$my_num = printStringReturnNumber();
echo $my_num;









