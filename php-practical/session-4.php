<?php

declare(strict_types=1); // strict requirement



echo '<h2>PHP For Loop</h2>';

// PHP For Loop 
echo "<br><br>";
echo "<b>PHP For Loop - Multiplication (*) <br></b>";
echo '<br><br>';

$num = 2;
for ($i = 1; $i <= 5; $i++) {
    $result = $num * $i;
    echo "$num * $i = $result <br>";
}

echo "<br><br>";
echo "<b>PHP For Loop - Division (/) <br></b>";
echo '<br><br>';

$num = 100;
for ($i = 1; $i <= 5; $i++) {
    $result = $num / $i;
    echo "$num / $i = $result <br>";
}

echo "<br><br>";
echo '<h1>PHP Functions</h1>';
echo "<br><br>";
echo 'Functions in PHP <br>';

function welcome()
{
    echo "Hello world! <br>";
}

welcome();
welcome();
welcome();
welcome();
welcome();

echo "<br><br>";
echo "<br><br>";

function familyName(string $fname, $c = 0)
{
    echo "$fname Refsnes ($c).<br>";
}

familyName("Jani", 1);
familyName("Hege", 2);
familyName("Stale");
familyName("Kai Jim");
familyName("Borge", 5);

echo "<br><br>";
echo "<br><br>";

function sum($a, $b)
{
    $z = $a + $b;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

echo "<br><br>";
echo "<br>subtract<br>";

function subtract(int $a, int $b)
{
    $z = $a - $b;
    return $z;
}

echo "5 - 10 = " . subtract(5, 10) . "<br>";
echo "7 - 13 = " . subtract(7, 13) . "<br>";
echo "2 - 4 = " . subtract(2, 4);

echo "<br><br>";
echo "<br>multiply<br>";

function multiply(int $a, int $b)
{
    $z = $a * $b;
    return $z;
}

echo "1 * 10 = " . multiply(1, 10) . "<br>";
echo "2 * 13 = " . multiply(2, 13) . "<br>";
echo "3 * 4 = " . multiply(3, 4);

echo "<br><br>";
echo "<br>divide<br>";

function divide(int $a, int $b)
{
    $z = $a / $b;
    return $z;
}

echo "1 / 10 = " . divide(1, 10) . "<br>";
echo "2 / 13 = " . divide(2, 13) . "<br>";
echo "3 / 4 = " . divide(3, 4);


echo "<br><br>";
echo "<br>Reference Parameters<br>";

function add_five(int &$value)
{
    $value += 5;
}

$num = 2;
add_five($num); // + 5
add_five($num); // + 5
add_five($num); // + 5
add_five($num); // + 5
add_five($num); // + 5
echo $num; // Outputs 27 (2 + 5 + 5 + 5 + 5 + 5)

// PHP Functions - Variable Functions
echo "<br><br>";
echo "<br>Variable Functions<br>";

function sumMyNumbers(mixed ...$x)
{
    $n = 0; // initialize sum
    $len = count($x);
    echo "Number of arguments: $len<br><br>";
    for ($i = 0; $i < $len; $i++) {
        echo "Argument $i: $x[$i]<br>";
        $n += $x[$i]; // add each argument to the sum
    }
    echo "<br>";
    return $n;
}
echo "<br>";
$a = sumMyNumbers(5, 2, 6, 2, 7, 7, 2); // 31
echo $a;

echo "<br><br>";

function myFamily(string $lastname, mixed ...$firstnameArry)
{
    $txt = "";
    $len = count($firstnameArry);
    for ($i = 0; $i < $len; $i++) {
        $txt = $txt . "Assalamu Alaikkum, $firstnameArry[$i] $lastname.<br>";
    }
    return $txt;
}

$a = myFamily("Ibn Siraj", "Musab", "Mahas", "Maasin");
echo $a;


// function addNumbers(int $a, int $b)
// {
//     return $a + $b;
// }
// echo addNumbers(5, "5 days"); // This will cause a TypeError


function addNumbers(float $a, float $b): float
{
    return $a + $b;
}
echo addNumbers(1.2, 5.2);

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
