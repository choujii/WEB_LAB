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
