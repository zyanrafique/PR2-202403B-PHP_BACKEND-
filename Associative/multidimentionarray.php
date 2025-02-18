
<?php
// Student array
$student = array(
    "Student1" => array(
        "name" => "al",
        "age" => 21,
    ),
    "Student2" => array(
        "name" => "ali",
        "age" => 31,
    )
);

echo "<br>";
var_dump($student);
echo "</br>";

echo "Student1 Name: " . $student["Student1"]["name"];
?>
