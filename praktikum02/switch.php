<?php

$grade = "B";

switch ($grade) {
    case 'A':
        echo "sangat Memuaskan";
        break;

    case 'B':
        echo "memuaskan";
        break;

    case 'C':
        echo "cukup";
        break;

    case 'D':
        echo "kurang";
        break;

    case 'E':
        echo "sangat kurang";
        break;

    default:
        $predikat = "tidak ada";
        break;
}

echo "predikat = " . $predikat;

?>
