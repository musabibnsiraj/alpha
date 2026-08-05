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

echo "<pre>



























</pre>";
