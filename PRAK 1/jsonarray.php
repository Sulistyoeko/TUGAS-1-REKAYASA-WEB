<?php
$jsonobj ='{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

// Mengakses Nilai object
echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
?>