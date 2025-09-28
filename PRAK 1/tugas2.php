<?php
// Variabel JSON
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// Decode ke PHP Object
$obj = json_decode($jsonobj);

// Decode ke PHP Array
$arr = json_decode($jsonobj, true);

echo "<br><br>Hasil Decode ke PHP Object: <br>";
echo "Peter: " . $obj->Peter . "<br>";
echo "Ben: " . $obj->Ben . "<br>";
echo "Joe: " . $obj->Joe . "<br>";

echo "<br>Hasil Decode ke PHP Array: <br>";
echo "Peter: " . $arr["Peter"] . "<br>";
echo "Ben: " . $arr["Ben"] . "<br>";
echo "Joe: " . $arr["Joe"] . "<br>";
?>
