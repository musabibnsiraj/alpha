<?php


echo "Salam";

echo '<p>Aug 5 2026</p>';

$cars = array("Volvo", "BMW", "Toyota");

echo $cars[2];
echo '<br>';
echo '<br>';
$cars[0] = "Lamborghini";
echo '<br>';
echo '<br>';

var_dump($cars);


echo '<br>';
echo '<br>';


foreach ($cars as $car) {
    echo "<button style='margin: 5px;'> $car </button><br>";
}

echo '<br>';
echo '<br>';

$std = array("Mishary", "25", "Puttalam", "BSc");

foreach ($std as $student) {
    echo "<h1 style='margin: 5px;'> $student </h1>";
}

echo "Name: <b style='margin: 5px;'> $std[0] </b></h1>";

echo '<br>';
$student = array("name" => "Mishary", "age" => "25", "address" => "Puttalam", "degree" => "BSc");

echo "Name: <b style='margin: 5px;'> $student[name] </b> <br>";
echo "Age: <b style='margin: 5px;'> $student[age] </b> <br>";
echo "Address: <b style='margin: 5px;'> $student[address] </b> <br>";
echo "Degree: <b style='margin: 5px;'> $student[degree] </b> <br>";

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
foreach ($student as $key => $value) {
    echo "<h1 style='margin: 5px;'> $key: $value </h1>";
}
echo '<br>';
echo '<br>';

$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
$fruits[] = "Grapes";
$fruits[] = "Grapes";

var_dump($fruits);

echo '<br>';
echo '<br>';

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

var_dump($fruits);
echo '<br>';
echo '<br>';
echo '<br>';
$student = array("name" => "Mishary", "age" => "25", "address" => "Puttalam", "degree" => "BSc");
$student += ["school" => "Zahira College"]; // $student["school"] = "Zahira College";

echo "Name: <b style='margin: 5px;'> $student[name] </b> <br>";
echo "Age: <b style='margin: 5px;'> $student[age] </b> <br>";
echo "Address: <b style='margin: 5px;'> $student[address] </b> <br>";
echo "Degree: <b style='margin: 5px;'> $student[degree] </b> <br>";
echo "School: <b style='margin: 5px;'> $student[school] </b> <br>";

$fruits = array("Apple", "Banana", "Cherry");
$new_fruit = "Orange";
array_splice($fruits, 1, 0, $new_fruit); // insert "Orange" at index 1

var_dump($fruits);
echo '<br>';
echo '<br>';
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
print_r($numbers);
echo '<br>';
echo '<br>';
rsort($numbers);
print_r($numbers);

echo '<br>';
echo '<br>';
$cars = array(
    array("Volvo", 22, 18), // 0
    array("BMW", 15, 13), // 1
    array("Saab", 5, 2), // 2
    array("Land Rover", 17, 15), // 3
    array("Toyota", 10, 5) // 4
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>"; // Volvo: In stock: 22, sold: 18.
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>"; // BMW: In stock: 15, sold: 13.
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>"; // Saab: In stock: 5, sold: 2.
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>"; // Land Rover: In stock: 17, sold: 15.
echo $cars[4][0] . ": In stock: " . $cars[4][1] . ", sold: " . $cars[4][2] . ".<br>"; // Toyota: In stock: 10, sold: 5.


echo "<pre>



























</pre>";
