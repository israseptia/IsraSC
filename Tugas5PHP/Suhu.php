<?php
class KonversiSuhu {
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function konversi() {
        $hasilKonversi = 0;

        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit") {
            // Rumus konversi Celcius to Fahrenheit
            $hasilKonversi = ($this->besaranSuhu * 9/5) + 32;
        } elseif ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
            // Rumus konversi Fahrenheit to Celcius
            $hasilKonversi = ($this->besaranSuhu - 32) * 5/9;
        } elseif ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
            // Rumus konversi Celcius to Rheamur
            $hasilKonversi = $this->besaranSuhu * 4/5;
        } elseif ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
            // Rumus konversi Rheamur to Celcius
            $hasilKonversi = $this->besaranSuhu * 5/4;
        }

        return $hasilKonversi;
    }
}
?>
