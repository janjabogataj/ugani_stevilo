<?php

$ime = "Gregor";



echo "Živjo <br>" . $ime . ", kako si kaj<br><br>";

$a=130;
$b="130";
$ime = "Gregor";

$polje = array("banana", "jabolko", "ananas");

echo $polje[1];




$oseba = array(
    "ime" => "jože",
    "priimek" => "Novak",
    "starost" => 23);

echo $oseba["ime"]." ".$oseba["priimek"];













echo $a + $b;
echo "<br>";

echo $a - $b;
echo "<br>";

echo $a * $b;
echo "<br>";

echo 2 + 3;
echo "<br>";
echo "<br>";

if ($a > $b) {
    echo "$a je večji od $b";
} else {
    echo "$b je večji od $a";
}

echo "<br>";
echo "<br>";

if ($a !== $b) {
    echo "a ni enak b";
} else {
    echo "b je enak a";
}


echo "<br>";
echo "<br>";

$i = 0;
$n = 30;


while($i < $n) {
    echo $i. "<br>";
    $i = $i + 1;
}



?>