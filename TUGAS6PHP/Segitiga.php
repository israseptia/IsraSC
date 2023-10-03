<?php
require_once 'AbstractClass.php';
class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang() {
        return "Segitiga";
    }
    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }
    public function kelilingBidang() {
        $sisi_miring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        return $this->alas + $this->tinggi + $sisi_miring;
    }
}
?>
