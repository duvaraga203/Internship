<?php

// switch

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

//loops

//while
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

//do-while
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

//for
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

//for-each
//array
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

//associated array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

//just "break"
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }
?>