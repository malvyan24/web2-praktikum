<?php 

// fungsi function
function hitungUmur ($thn_lahir) {
    $thn_sekarang = 2023;

    // hitungnumur
    $umur = $thn_sekarang - $thn_lahir;
    // tampilan
    return $umur;

}

// panggil fungsi
echo hitungUmur(2001);

?>