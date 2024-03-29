<?php
// Imagine a lot of code here
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " with barbecue sauce";


// 2.Numbers
// Declaring a variable with an integer value
$integer_number = 5;
// Outputting the value of the variable to the terminal
echo $integer_number;

// Printing a new line
echo "\n";

// Declaring a floating-point variable
$float_number = 3.14;
// Outputting the value of the new variable to the terminal
echo $float_number;

// Outputting the number 12
echo 6 + 6;

// How much more did I spend last month than this month?
$last_month = 1187.23;
$this_month = 1089.98;

// Outputting the difference between expenses last month and this month
echo "\nDifference in expenses: " . ($last_month - $this_month);

// 3.Multiplication and division
// Creating a variable with the number of programming languages learned
$num_languages = 4;

// Creating a variable with the number of months spent on training
$months = 11;

// Assuming that Meg was coding 16 days a month
$days_per_month = 16;

// Counting the total number of days spent on training
$days = $months * $days_per_month;

// Counting the number of days spent learning each language on average
$days_per_language = $days / $num_languages;

echo $days_per_language;

// 4.Exponentiation
echo 8 ** 2; // Outputs 64

// 5.Assignment operators

// // Create the $my_name variable and assign any number to it
$my_num = 10;

// Creating the $answer variable and assigning it the value $my_number
$answer = &$my_num;

// Using the addition assignment operator to add 2 to $answer
$answer += 2;

// Using the multiplication assignment operator to multiply $answer by 2
$answer *= 2;

// Using the subtraction assignment operator to subtract 2 from $answer
$answer -= 2;

// Using the division assignment operator to divide $answer by 2
$answer /= 2;

// Using the subtraction assignment operator to subtract the original number ($my_num) from $answer
$answer -= $my_num;

echo $answer;

// 6.Mathematical functions

// Find the remainder of dividing the variable $a by the variable $b:
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "The remainder of dividing $a by $b: $remainder";

// Checking the division of $a by $b without remainder
$a = 10;
$b = 3;
if (0 === $a % $b) {
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
    if ($number % $i === 0) {
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

// 8.Functions

// The increaseEnthusiasm() function, which adds an exclamation mark to the passed string
function increaseEnthusiasm($string)
{
    return $string . "!";
}

// Function repeat Three Times() function that repeats the passed string three times
function repeatThreeTimes($string)
{
    return $string . $string . $string;
}

// The cut function, which cuts the string to the specified length
function cut($string, $length = 10)
{
    return substr($string, 0, $length);
}

// Output of the result of calling the increase Enthusiasm function() with the string "Hello"
echo increaseEnthusiasm("Hello") . "\n";

// Output of the result of calling the repeatThreeTimes() function with the string "Goodbye"
echo repeatThreeTimes("Goodbye") . "\n";

// Output the result of calling the increaseEnthusiasm() function with the result of calling repeatThreeTimes() as an argument
echo increaseEnthusiasm(repeatThreeTimes("Thank you")) . "\n";

// Function for output of array elements using recursion
function printArrayRecursively($array, $index = 0)
{
    if ($index < count($array)) {
        echo $array[$index] . " ";
        printArrayRecursively($array, $index + 1);
    }
}

// Example of calling the printArray Recursively() function with an array of numbers
$array = [1, 2, 3, 4, 5];
echo "Array elements: ";
printArrayRecursively($array);
echo "\n";

// Function for adding digits of a number to get a single digit number
function sumDigitsToOne($number)
{
    $sum = array_sum(str_split((string)$number));
    if ($sum > 9) {
        return sumDigitsToOne($sum);
    } else {
        return $sum;
    }
}

// Example of calling the sumDigitsToOne() function with a number
$number = 987654321;
echo "Sum of digits of $number: " . sumDigitsToOne($number) . "\n";

// 9.Arrays

// Filling the array
$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}
print_r($array);

//arrayFill function:
function arrayFill($value, $count) {
    $result = [];
    for ($i = 0; $i < $count; $i++) {
        $result[] = $value;
    }
    return $result;
}

// Example of using the function
$array = arrayFill('x', 5);
print_r($array);

// Finding the sum of the elements of a two-dimensional array
$array = [[1, 2, 3], [4, 5], [6]];

$sum = 0;
foreach ($array as $subarray) {
    $sum += array_sum($subarray);
}
echo "Sum of array elements: $sum\n";

// Creating an array [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
$array = [];
$count = 1;
for ($i = 0; $i < 3; $i++) {
    $subarray = [];
    for ($j = 0; $j < 3; $j++) {
        $subarray[] = $count++;
    }
    $array[] = $subarray;
}
print_r($array);

// Multiplication and addition of array elements
$array = [2, 5, 3, 9];
$result = ($array[0] * $array[1]) + ($array[2] * $array[3]);
echo "Result: $result\n";

// Output of last name, first name and patronymic
$user = [
    'name' => 'Lvov',
    'surname' => 'Maksim',
    'patronymic' => 'Olegovich'
];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . "\n";

//Creating an array with the current date
$date = [
    'year' => date('Y'),
    'month' => date('m'),
    'day' => date('d')
];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . "\n";

//Output the number of elements, the last and penultimate elements of the array
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "The number of elements in the array: " . count($arr) . "\n";
echo "The last element: " . end($arr) . "\n";
echo "The penultimate element: " . prev($arr) . "\n";

// 10. if else construction
// Function for checking the sum of two numbers
function checkSum($num1, $num2) {
    return ($num1 + $num2) > 10;
}
// Usage example
$num1 = 5;
$num2 = 7;
$result = checkSum($num1, $num2);
echo $result ? "true" : "false"; // Outputs true
// Function for checking the equality of two numbers
function checkEquality($num1, $num2) {
    return $num1 === $num2;
}
// Usage example
$num1 = 5;
$num2 = 5;
$result = checkEquality($num1, $num2);
echo $result ? "true" : "false"; // Outputs true

// Rewritten code
$test = 0;
echo "\n";
echo ('right' === ($test === 0)) ? 'right' : '';
echo "\n";

// Checking the number and summing the digits
$age = 52; // Example of a number

if (10 > $age || 99 < $age) {
    echo "A number less than 10 or more than 99";
} else {
    $sum = array_sum(str_split($age));
    if (9 >= $sum) {
        echo "The sum of the digits is unambiguous";
    } else {
        echo "The sum of two-digit digits";
    }
}

// Checking the array and displaying the sum of the elements
$arr = [1, 2, 3]; // Example of array

if (3 === count($arr)) {
    echo array_sum($arr);
}

// 11.Cycles
// External loop for strings
for ($i = 1; $i <= 20; $i++) {
    // Variable for storing the current line
    $row = '';

    // Internal loop for adding 'x' to a string
    for ($j = 1; $j <= $i; $j++) {
        $row .= 'x';
    }

    // Output of the current line
    echo $row . "<br>";
}
// 12.Combination of functions
// The arithmetic mean of the array elements:
$array = [1, 2, 3, 4, 5];
$average = array_sum($array) / count($array);
echo $average; // Output 3

// The sum of the numbers from 1 to 100 without cycles
$sum = array_sum(range(1, 100));
echo $sum; // Output 5050

// Get an array with square roots of numbers
$array = [4, 9, 16, 25];
$squareRoots = array_map('sqrt', $array);
print_r($squareRoots); // Output Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )

// using the letters of the English alphabet as keys
$letters = range('a', 'z');
$numbers = range(1, 26);
$array = array_combine($letters, $numbers);
print_r($array);

// the sum of the pairs of numbers in the string '1234567890'
$string = '1234567890';
$sum = array_sum(str_split($string, 2));
echo $sum; // Output 255


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";