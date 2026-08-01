<h1>PHP Session 3</h1>

<?php

echo '<h2>PHP Switch Statement</h2>';


// 34 - fail
// 35 - S
// 45 - C
// 55 - B
// 65 - A

echo "<br><br>";

$marks = 46;

switch (true) {
    case $marks  < 35:
        echo "Your result is failed!";
        break;
    case $marks  >= 35 && $marks  < 45:
        echo "Your result is S!";
        break;
    case $marks  >= 45 && $marks  < 55:
        echo "Your result is C!";
        break;
    case $marks  >= 55 && $marks  < 65:
        echo "Your result is B!";
        break;
    default:
        echo "Your result is A!";
}

echo "<br><br>";

$day = "sun";

switch ($day) {
    case "mon":
        echo "Today is Monday";
        break;
    case "sat":
    case "sun":
        echo "Today is weekend";
        break;
    default:
        echo "Today is another day";
}

echo "<br><br>";

//PHP Loops
//

echo '<h2>PHP Loops</h2>';

// while loop
echo "PHP While Loop <br>";
echo "<br><br>";

$i = 1; // Initialize counter
while ($i < 6) { // Check condition
    echo "The number is: $i <br>";
    $i++; // Increment counter +1
}
//

echo "<br><br>";

// do while loop
echo "<br><br>";
echo "PHP Do While Loop <br>";
echo "<br><br>";
$i = 1;

do {
    echo "The number is: $i <br>";
    $i++;
} while ($i < 6);

echo "<br><br>";

$i = 8;

do {
    echo "The number is: $i <br>";
    $i++;
} while ($i < 6);

echo "<br><br>";
echo "<b>PHP Do While Loop (with break) <br></b>";
echo "<br>";
$i = 1; // Initialize counter

do {
    if ($i == 3) break;
    echo "The number is: $i <br>";
    $i++;
} while ($i < 6);

echo "<br><br>";
echo "<b>PHP Do While Loop (with continue) <br></b>";
echo "<br>";
$i = 0; // Initialize counter

do {
    $i++;
    if ($i == 3) continue; // Skip the rest of the loop when $i is 3
    echo "The number is: $i <br>";
} while ($i < 6);

echo "<br><br>";
echo "<b>PHP For Loop - continue <br></b>";
echo '<br><br>';

for ($i = 1; $i <= 6; $i++) {
    if ($i == 3) continue; // Skip the rest of the loop when $i is 3
    echo "The number is: $i <br>";
    // Increment counter +1
}

echo '<br><br>';

echo "<b>PHP For Loop (Backward) - decrement - continue <br></b>";
echo '<br><br>';

for ($i = 10; $i >= 6; $i--) {
    if ($i == 8) continue; // Skip the rest of the loop when $i is 8
    // Initialize counter, Check condition, decrement counter
    echo "The number is: $i <br>";
    // decrement counter -1 
}

echo "<br><br>";
echo "<b>PHP For Loop - Break <br></b>";
echo '<br><br>';

for ($i = 1; $i <= 6; $i++) {
    if ($i == 3) break; // Stop the loop when $i is 3
    echo "The number is: $i <br>";
    // Increment counter +1
}

echo '<br><br>';

echo "<b>PHP For Loop (Backward) - decrement - break <br></b>";
echo '<br><br>';

for ($i = 10; $i >= 6; $i--) {
    if ($i == 8) break; // Stop the loop when $i is 8
    // Initialize counter, Check condition, decrement counter
    echo "The number is: $i <br>";
    // decrement counter -1 
}


// for each loop
echo "<br><br>";
echo "<b>PHP For Each Loop <br></b>";
echo "<br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "<button style='background-color: $value; border: 1px solid #ccc; padding: 5px; margin: 5px;'>$value </button> <br>";
}
// for each loop with associative array
echo "<br>";
$colors = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($colors as $value) {
    echo "$value <br>";
}

//

echo "<b>PHP For Loop (Backward) - decrement - break <br></b>";
echo '<br><br>';

for ($i = 10; $i >= 6; $i--) {
    if ($i == 8) break; // Stop the loop when $i is 8
    // Initialize counter, Check condition, decrement counter
    echo "The number is: $i <br>";
    // decrement counter -1 
}
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
