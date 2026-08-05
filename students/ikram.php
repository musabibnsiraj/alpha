<?php
$student = array("name" => "ikram", "age" => "18", "address" => "Puttalam", "degree" => "bsc");

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
?>