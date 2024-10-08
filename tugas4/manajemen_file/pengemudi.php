<?php
class Pengemudi {
    public $nama;
    public $umur;

    public function setPengemudi($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function getPengemudi() {
        return "Nama Pengemudi: " . $this->nama . ", Umur: " . $this->umur;
    }
}
?>
