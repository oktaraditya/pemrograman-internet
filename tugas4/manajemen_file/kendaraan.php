<?php
class Kendaraan {
    public $jenis;
    public $merek;

    public function setKendaraan($jenis, $merek) {
        $this->jenis = $jenis;
        $this->merek = $merek;
    }

    public function getKendaraan() {
        return "Jenis Kendaraan: " . $this->jenis . ", Merek: " . $this->merek;
    }
}
?>
