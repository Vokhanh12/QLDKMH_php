<?php
class Person {
    // Thuộc tính
    private $MaND;
    private $TenND;
    private $SDT;
    private $Diachi;

    // Constructor
    public function __construct($MaND, $TenND, $SDT, $Diachi) {
        $this->MaND = $MaND;
        $this->TenND = $TenND;
        $this->SDT = $SDT;
        $this->Diachi = $Diachi;
    }

    // Getter methods
    public function getMaND() {
        return $this->MaND;
    }

    public function getTenND() {
        return $this->TenND;
    }

    public function getSDT() {
        return $this->SDT;
    }

    public function getDiachi() {
        return $this->Diachi;
    }

    // Setter methods
    public function setMaND($MaND) {
        $this->MaND = $MaND;
    }

    public function setTenND($TenND) {
        $this->TenND = $TenND;
    }

    public function setSDT($SDT) {
        $this->SDT = $SDT;
    }

    public function setDiachi($Diachi) {
        $this->Diachi = $Diachi;
    }
}
?>