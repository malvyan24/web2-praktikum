<?php 
// buat class bmi pasien
class bmiPasien {
    // tulis property dan method
    public $nama, $berat, $tinggi, $umur, $jk;

    //bikin contrak
    public function __construct($nama, $berat, $tinggi, $umur, $jk) {
    // akses property
    $this -> nama = $nama;
    $this -> berat = $berat;
    $this -> tinggi = $tinggi;
    $this -> umur = $umur;
    $this -> jk = $jk;
    }

    //tinffi dalam meter
    public function hasilBMI() {
        $tinggi_m = $this ->tinggi / 100;
        // rumus bmi
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi);
    }
    //bikin method status
    public function statusBMI()
    {
        $bmi = $this->hasilBMI();
        //
        if ($bmi < 18.5) {
            return "kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal (ideal)";

        } elseif ($bmi >= 25 && $bmi <= 24.9) {
            return "kelebihan berat badan";
            
        } else {
            return "kegemukan(obesitas)";
        }
}
}

//buat objek
// $pasien = new bmiPasien ("Alpian", "60", "185", "25", "L");

// //tampilin
// echo $pasien -> nama . "<br>";
// echo $pasien -> berat . "<br>";
// echo $pasien -> hasilBMI() . "<br>";

