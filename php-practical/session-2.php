<?php


if (5 > 10) { // false
    echo "Have a good day!\n";
}else{
    // true
    echo "Have a beautiful day!\n";
}

echo '<br><br>';

if (5 > 3) echo "\n Have a awsome day!";
if (5 > 3) {echo "\n Have a awsome day!";}


echo '<br><br>';
// 34 - fail
// 35 - pass
$mark = 24;

if ($mark < 35) {
    echo "Your result is failed!";
}else{
    // true
    echo " Your result is passed!!";
}

echo '<br><br>';

// 34 - fail
// 35 - S
// 45 - C
// 55 - B
// 65 - A

$m = 46;

if ($m < 35) {
    echo "Your result is failed!";
}elseif($m >= 35 && $m < 45){
    // true
    echo "Your result is S!";
}elseif($m >= 45 && $m < 55){
    // true
    echo "Your result is C!";
}elseif($m >= 55 && $m < 65){
    // true
    echo "Your result is B!";
}else{
    // true
    echo "Your result is A!";
}


echo '<br><br>';

echo "PHP Assignment Operators <br>";

echo "	\$x = 20; \$x += 100; <br>";

$x = 20;
$x += 100;

echo $x;
echo '<br><br>';

echo "PHP Comparison Operators <br>";
echo "	\$x = 100; \$y = \"100\"; <br>";

$x = 100;
$y = "100";
var_dump($x == $y); // returns true because values are equal

echo '<br><br>';
echo "	\$x = 100; \$y = \"100\"; <br>";
$x = 100; // integer
$y = "100"; // string

var_dump($x === $y); // returns false because types are not equal
echo '<br><br>';

$x = 100; // integer
$y = 100; // string

echo "	\$x = 100; \$y = 101; <br>";
echo '<br>';
var_dump($x != $y); // returns true because values are not equal
