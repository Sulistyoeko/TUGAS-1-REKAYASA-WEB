<?php
// Buat variabel array
$data = array(
    "nama" => "Eko",
    "umur" => 21,
    "hobi" => array("Membaca", "Coding", "Olahraga")
);

// Encode ke format JSON
$jsonData = json_encode($data);

echo "Hasil Encode (Array → JSON): <br>";
echo $jsonData;
?>
