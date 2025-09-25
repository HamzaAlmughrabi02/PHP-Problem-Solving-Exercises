<?php

echo "  A) Basics (Syntax, Variables, Operators) <br> <br>";

//1. print hello world!
echo "  1. " . "Hello, World!" ."<br>";

//2. Declare variables for name, age, and city, then print them.
$name="hamza";
$age=23;
$city="Amman";
echo "  2. " .$name." ".$age ." ". $city  ."<br>";

//3. Swap two numbers without using a third variable.
$a=2;
$b=4;
[$a, $b] = [$b, $a];
echo "  3. Before swap: a =2, b =4 ||";
echo "   After swap: a =" . $a. ",  b =".$b."<br>";

//4. Find the sum of two numbers.
$sum=$a+$b;
echo "  4. 4+2= " .$sum."<br>";

// 5. Find the product of two numbers.
$product=$a*$b;
echo "  5. 4*2= " .$product ."<br>";

// 6. Find the remainder when dividing two numbers.
$remainder=$a%$b;
echo "  6. 4%2= " .$remainder ."<br>";

// 7. Calculate the average of three numbers.
$n1=3;
$n2=4;
$n3=5;
$avg=$n1+$n2+$n3 /3;
echo "  7. [3,4,5]    avg= " .$avg ."<br>";

// 8. Convert Celsius to Fahrenheit.
$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;
echo "  8. $celsius celsius = $fahrenheit fahrenheit"."<br>";

// 9. Convert hours into minutes and seconds.
$hours = 2.5;
$minutes = $hours * 60; 
$seconds = $hours * 3600; 
echo "  9. $hours hours = $minutes minutes = $seconds seconds"."<br>";

// 10. Find the square and cube of a number.
$number = 4;
$square = pow($number, 2);
$cube = pow($number, 3);
echo "  10. $number number = $square square = $cube cube"."<br> <br>";


//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
echo "  B) Conditions (if, else, switch) <br> <br>";

// 11. Check if a number is even or odd.
$number = 15; 
if ($number & 1) { 
    echo "11. ($number) is (Odd) <br>";
} else {
    echo "11. ($number) is (Even) <br>";
}

// 12. Check if a number is positive, negative, or zero.
if ($number > 0) {
    echo "12. ($number) is Positive <br>";
} elseif ($number < 0) {
    echo "12. ($number) is Negative <br>";
} else {
    echo "12. ($number) is Zero <br>";
}

// 13. Find the largest of three numbers.
$num1 = 50;
$num2 = 75;
$num3 = 30;
$largest_direct = max($num1, $num2, $num3);
$numbers_array = [$num1, $num2, $num3];
$largest_array = max($numbers_array);
echo "13. The largest of [$num1, $num2, $num3] is ($largest_direct)  <br>";

// 14. Check if a year is a leap year.
$year = 2025; 
if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
    echo "14. ($year) is a Leap Year <br>";
} else {
    echo "14. ($year) is NOT a Leap Year <br>";
}

// 15. Check if a person is eligible to vote (age ≥ 18).
$age = 23; 
$min_voting_age = 18;
if ($age >= $min_voting_age) {
    echo "15. This age ($age) is eligible to vote. <br>";
} else {
    echo "15. This age ($age) is Not eligible to vote. <br>";
}

// 16. Print grade based on marks (A, B, C, F).
$marks = 72;
$grade;
if ($marks >= 80) {
    $grade = 'A';
} elseif ($marks >= 60) {
    $grade = 'B';
} elseif ($marks >= 40) {
    $grade = 'C';
} else {
    $grade = 'F';
}
echo "16. For a score of ($marks), the grade is: $grade <br>";

// 17. Check if a character is a vowel or consonant.
$char = 'E'; 
$vowels = ['a', 'e', 'i', 'o', 'u']; 
$lower_char = strtolower($char);
if (in_array($lower_char, $vowels)) {
    echo "17. ('$char') is a Vowel. <br>";
} else {
    echo "17. ('$char') is a Consonant. <br>";
}

// 18. Use a switch statement to print the day of the week.
$day_number = 4; 
switch ($day_number) {
    case 1:
        $day_name = "Sunday";
        break;
    case 2:
        $day_name = "Monday";
        break;
    case 3:
        $day_name = "Tuesday";
        break;
    case 4:
        $day_name = "Wednesday";
        break;
    case 5:
        $day_name = "Thursday";
        break;
    case 6:
        $day_name = "Friday";
        break;
    case 7:
        $day_name = "Saturday";
        break;
    default:
        $day_name = "Invalid Day Number";
        break;
}
echo "18. Day number ($day_number) : $day_name <br>";

// 19. Use a switch statement to print the day of the week.
$number = 55; 
if (($number % 5 == 0) && ($number % 11 == 0)) {
    echo "19. ($number) is divisible by both 5 and 11. <br>";
} else {
    echo "19. ($number) is NOT divisible by both 5 and 11. <br>";
}

// 20. Find the absolute value of a number.
$number1 = -45;
$absolute_value1 = abs($number1);
echo "20. The absolute value of ($number1) is $absolute_value1 <br><br>";


//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
echo "  C) Loops (for, while, do-while) <br> <br>";

// 21. Print numbers from 1 to 10.
echo"21. [";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "]<br>";

// 22. Print even numbers between 1 and 50.
echo "22. Even numbers from (1-50) [ ";
for ($i = 2; $i <= 50; $i += 2) {
    echo $i . " ";
}
echo "]<br>";

// 23. Print even numbers between 1 and 50.
echo "23. Odd numbers from (1-50) [ ";
for ($i = 1; $i <= 50; $i += 2) {
    echo $i . " ";
}
echo "]<br>";

// 24. Print the multiplication table of a given number.
echo "24. Multiplication Table (7) [ ";
$number = 7; 
for ($i = 1; $i <= 10; $i++) {
    echo ($number * $i) . " ";
}
echo "]<br>";

// 25. Find the sum of first 100 natural numbers.
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum+=$i;
}
echo "25. The sum of the first 100 natural numbers is: ($sum) <br>";

// 26. Find the factorial of a number.
$number = 5;
$factorial = 1;
for ($i = $number; $i >= 1; $i--) {
    $factorial *= $i; 
}
echo "26. The factorial of ($number) is: ($factorial) <br>";

// 27. Print the Fibonacci series up to n terms.
$n = 10;
$fib = []; 
if ($n >= 1) {
    $fib[0] = 0;
}
if ($n >= 2) {
    $fib[1] = 1;
}
for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}
echo "27. Fibonacci Series up to $n terms: " . implode(", ", $fib) . "<br>";

// 28. Reverse a given number.
$number = 98765;
$reversed_number = '';
$number_string = (string)$number;
$len = strlen($number_string);
for ($i = $len - 1; $i >= 0; $i--) {
    $reversed_number .= $number_string[$i]; 
}
$result = (int)$reversed_number;
echo "28. The reverse of ($number) is: ($result) <br>";

// 29. Count the number of digits in a number.
$number_loop = 987654;
$count = 0;
$temp_number = abs($number_loop); 
if ($temp_number == 0) {
    $count = 1; 
} else {
    while ($temp_number > 0) {
        $temp_number = (int)($temp_number / 10);
        $count++;
    }
}
echo "29. The number of digits in ($number_loop) is: ($count) (using loop) <br>";

// 30. Find the sum of digits of a number.
$number = 12345;
$sum_of_digits = 0;
while ($number > 0) {
    $digit = $number % 10;
    $sum_of_digits += $digit;
    $number = (int)($number / 10);
}
echo "30. The sum of the digits of (12345) is: ($sum_of_digits) <br><br>";


//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
echo "  D) Arrays <br> <br>";

// 31. Create an array of numbers and print them.
echo "31. Create an array of numbers [ ";
$numberArray = [10, 25, 33, 47, 51, 60];
foreach ($numberArray as $numberArray) {
    echo $numberArray . " ";
}
echo "]<br>";

// 32. Find the maximum number in an array.
$numberArray = [10, 85, 33, 99, 51, 60, 4]; 
$maximum = max($numberArray); 
echo "32. The maximum number in the array [ 10, 85, 33, 99, 51, 60, 4 ] is: ($maximum) <br>";

// 33. Find the maximum number in an array.
$minimum = min($numberArray); 
echo "33. The minimum number in the array [ 10, 85, 33, 99, 51, 60, 4 ] is: ($minimum) <br>";

// 34. Find the sum of elements in an array.
$total_sum = array_sum($numberArray); 
echo "34. The sum number in the array [ 10, 85, 33, 99, 51, 60, 4 ] is: ($total_sum) <br>";

// 35. Find the average of array elements.
$total_sum = array_sum($numberArray);
$element_count = count($numberArray);
$average = $total_sum / $element_count;
echo "35. The average of the elements [ 10, 85, 33, 99, 51, 60, 4 ]is: ($average) <br>";

// 36. Count the number of even and odd elements in an array.
$numbers = [10, 5, 22, 17, 30, 9, 4, 11]; 
$even_count = 0;
$odd_count = 0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $even_count++;
    } else {
        $odd_count++;
    }
}
echo "36. The array is: [" . implode(", ", $numbers) . "] || ";
echo "Even elements: ($even_count) ";
echo "Odd elements: ($odd_count) <br>";

// 37. Sort an array in ascending order.
$numbers = [10, 85, 33, 99, 51, 60, 4]; 
sort($numbers);
$ascending_sorted = implode(", ", $numbers);
echo "37. [ 10, 85, 33, 99, 51, 60, 4 ] : ";
echo "Sorted Ascending: [ $ascending_sorted ] <br>";

// 38. Sort an array in descending order. 
rsort($numbers);
$ascending_sorted = implode(", ", $numbers);
echo "38. [ 10, 85, 33, 99, 51, 60, 4 ] : ";
echo "Sorted descending: [ $ascending_sorted ] <br>";

// 39. Search for an element in an array.
$search_value = 51; 
$key = array_search($search_value, $numbers);

if ($key !== false) {
    echo "39. [ 99, 85, 60, 51, 33, 10, 4 ] Element  ($search_value) found at index: ($key) <br>";
} else {
    echo "39. [ 99, 85, 60, 51, 33, 10, 4 ] Element ($search_value) was not found. <br>";
}

// 40. Remove duplicate elements from an array.
$numbers = [10, 5, 20, 10, 33, 5, 42, 20, 10]; 
$unique_numbers = array_unique($numbers);
$unique_implode = implode(", ", $unique_numbers);
echo "40. [ 10, 5, 20, 10, 33, 5, 42, 20, 10 ] Array without duplicates: [$unique_implode] <br><br>";


//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
echo "  E) Strings <br> <br>";

// 41. Find the length of a string.
$str = "Hello World";
$string_length = strlen($str);
echo "41. The length of the string (Hello World) is: ($string_length) <br>";

// 42. Count the number of vowels in a string.
$str = "Programming is Fun";
$vowel_count = preg_match_all('/[aeiou]/i', $str, $matches);
echo "42. The number of vowels (Programming is Fun) is: ($vowel_count) <br>";

// 43. Reverse a string without using built-in functions.
$my_string = "Coding";
$reversed_string = "";
$length = strlen($my_string);
for ($i = $length - 1; $i >= 0; $i--) {
    $reversed_string .= $my_string[$i];
}
echo "43. Reversed string (Coding)(manual loop): ($reversed_string) <br>";

// 44. Check if a string is a palindrome.
$is_palindrome = false;
$clean_string = strtolower($my_string);
if ($clean_string === strrev($clean_string)) {
    $is_palindrome = true;
}
echo "44. (Coding) Is Palindrome?: (" . ($is_palindrome ? "Yes" : "No") . ") <br>";

// 45. Convert a string to uppercase and lowercase.
$my_string = "Hamza Almughrabi";
$uppercase = strtoupper($my_string);
$lowercase = strtolower($my_string);
echo "45. Uppercase: ($uppercase) || ";
echo " Lowercase: ($lowercase) <br>";

// 46. Replace all spaces in a string with underscores.
$my_string = "Jordan Amman";
$search = " ";
$replace = "_";
$new_string = str_replace($search, $replace, $my_string);
echo "46. Replaced string: ($new_string) <br>";

// 47. Count the number of words in a string.
$my_string = "PHP is very useful for web development";
$word_count = str_word_count($my_string);
echo "47. The number of words (PHP c++ java python css js arduino) is: ($word_count) <br>";

// 48. Find the first occurrence of a word in a string.
$my_string = "Welcome to PHP programming.";
$search_word = "PHP";
$position = strpos($my_string, $search_word);
if ($position !== false) {
    $result = "found at index: $position";
} else {
    $result = "not found";
}
echo "48. Result: ($result) <br>";

// 49. Concatenate two strings.
$string1 = "Hello, ";
$string2 = "PHP World!";
$combined_string = $string1 . $string2;
echo "49. Concatenated string (Hello, )(PHP World!): ($combined_string) <br>";

// 50. Check if a string contains a specific substring.
$haystack = "The quick brown fox jumps";
$needle = "fox"; 
$contains = false;
if (str_contains($haystack, $needle)) {
    $contains = true;
}
echo "50. Check if ($haystack) contains '$needle': (" . ($contains ? "Yes" : "No") . ") <br>";
 

































?>