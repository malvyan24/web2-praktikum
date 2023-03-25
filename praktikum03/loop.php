<?php 

// buat loop for
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

// buat looping pertama
echo "<h3>looping pertama</h3>";

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - I love PHP <br>";
}

// buat looping kedua
echo "<h3>looping kedua</h3>";

for ($i = 20; $i >= 2; $i -= 2) {
    echo $i . " - I love PHP <br>";
}

// array
$buah = ["mangga","apel","anggur"];

foreach ($buah as $b) {
    echo $b . "<br>";
}



?>