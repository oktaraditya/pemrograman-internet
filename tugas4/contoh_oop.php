<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Kelas dan Objek</title>
</head>
<body>
    <h1>Contoh Kelas dan Objek dalam PHP</h1>

    <h2>Kelas dan Objek</h2>
    <div>
        <?php
        class Rumah {
            public $alamat;  // Properti public, bisa diakses dari luar kelas
            public $jumlahKamar;  // Properti public, bisa diakses dari luar kelas

            public function nyalakanLampu() {
                return "Lampu di rumah dengan alamat " . $this->alamat . " dinyalakan!";
            }
        }

        $rumahKu = new Rumah();  // Membuat objek dari kelas Rumah
        $rumahKu->alamat = "Jalan Mawar No. 5";  // Mengatur properti alamat
        $rumahKu->jumlahKamar = 3;  // Mengatur properti jumlah kamar

        echo "<strong>Alamat Rumah:</strong> " . $rumahKu->alamat . "<br>";  // Mengakses properti alamat
        echo "<strong>Jumlah Kamar:</strong> " . $rumahKu->jumlahKamar . "<br>";  // Mengakses properti jumlah kamar
        echo "<strong>Nyala Lampu:</strong> " . $rumahKu->nyalakanLampu() . "<br>";  // Memanggil metode nyalakanLampu()
        ?>
    </div>

    <h2>Contoh Encapsulation</h2>
    <div>
        <?php
        class BankAccount {
            private $saldo;  // Properti private, hanya bisa diakses dari dalam kelas

            public function setSaldo($saldo) {
                // Metode public untuk mengatur saldo
                $this->saldo = $saldo;
            }

            public function getSaldo() {
                // Metode public untuk mengambil saldo
                return $this->saldo;
            }
        }

        $akunBank = new BankAccount();  // Membuat objek dari kelas BankAccount
        $akunBank->setSaldo(1000000);  // Mengatur saldo menggunakan metode setSaldo()
        echo "<strong>Saldo Akun Bank:</strong> Rp" . $akunBank->getSaldo();  // Mengambil saldo menggunakan metode getSaldo()
        ?>
    </div>

    <h2>Contoh Pewarisan/Inheritence</h2>
    <div>
        <?php
        class Gadget {
            public $nama;  // Properti public, bisa diakses oleh kelas turunan

            public function fungsi() {
                return "Digunakan untuk komunikasi";
            }
        }

        class Laptop extends Gadget {
            public function fungsi() {
                return "Digunakan untuk bekerja dan hiburan";
            }
        }

        class Smartphone extends Gadget {
            public function fungsi() {
                return "Digunakan untuk komunikasi dan media sosial";
            }
        }

        $laptopBaru = new Laptop();  // Membuat objek dari kelas Laptop
        $laptopBaru->nama = "Dell";  // Mengatur properti nama

        $smartphoneBaru = new Smartphone();  // Membuat objek dari kelas Smartphone
        $smartphoneBaru->nama = "iPhone";  // Mengatur properti nama

        echo "<strong>Nama Gadget Laptop:</strong> " . $laptopBaru->nama . "<br>";  // Mengakses properti nama
        echo "<strong>Fungsi Laptop:</strong> " . $laptopBaru->fungsi() . "<br>";  // Memanggil metode fungsi()

        echo "<strong>Nama Gadget Smartphone:</strong> " . $smartphoneBaru->nama . "<br>";  // Mengakses properti nama
        echo "<strong>Fungsi Smartphone:</strong> " . $smartphoneBaru->fungsi() . "<br>";  // Memanggil metode fungsi()
        ?>
    </div>

    <h2>Contoh Polimorfisme</h2>
    <div>
        <?php
        class Makanan {
            public function rasa() {
                return "Makanan ini memiliki rasa";
            }
        }

        class Pizza extends Makanan {
            public function rasa() {
                return "Rasa gurih dan keju";
            }
        }

        class EsKrim extends Makanan {
            public function rasa() {
                return "Rasa manis dan dingin";
            }
        }

        $pizzaKu = new Pizza();  // Membuat objek dari kelas Pizza
        $esKrimKu = new EsKrim();  // Membuat objek dari kelas EsKrim

        echo "<strong>Rasa Pizza:</strong> " . $pizzaKu->rasa() . "<br>";  // Memanggil metode rasa() untuk objek pizzaKu
        echo "<strong>Rasa Es Krim:</strong> " . $esKrimKu->rasa() . "<br>";  // Memanggil metode rasa() untuk objek esKrimKu
        ?>
    </div>

    <h2>Contoh Abstraction</h2>
    <div>
        <?php
        abstract class AlatElektronik {
            abstract public function fungsi();  // Metode abstrak, harus diimplementasikan oleh kelas turunan
        }

        class KipasAngin extends AlatElektronik {
            public function fungsi() {
                return "Menghasilkan angin";
            }
        }

        $kipas = new KipasAngin();  // Membuat objek dari kelas KipasAngin
        echo "<strong>Fungsi Kipas Angin:</strong> " . $kipas->fungsi();  // Memanggil metode fungsi()
        ?>
    </div>

    <h2>Contoh Penggunaan Access Modifier</h2>
    <div>
        <h3>Public</h3>
        <?php
        class Perpustakaan {
            public $namaBuku;  // Properti public, bisa diakses dari luar kelas

            public function setNamaBuku($namaBuku) {
                // Metode public, bisa diakses dari luar kelas
                $this->namaBuku = $namaBuku;
            }

            public function getNamaBuku() {
                // Metode public, bisa diakses dari luar kelas
                return $this->namaBuku;
            }
        }

        $perpus = new Perpustakaan();  // Membuat objek dari kelas Perpustakaan
        $perpus->setNamaBuku("Ensiklopedia Dunia");  // Bisa diakses dari luar kelas
        echo "<strong>Nama Buku:</strong> " . $perpus->getNamaBuku();  // Bisa diakses dari luar kelas
        ?>
        <h3>Private</h3>
        <?php
        class Restoran {
            private $namaMenu;  // Properti private, tidak bisa diakses dari luar kelas

            public function setMenu($namaMenu) {
                // Metode public, bisa diakses dari luar kelas
                $this->namaMenu = $namaMenu;
            }

            public function getMenu() {
                // Metode public, bisa diakses dari luar kelas
                return $this->namaMenu;
            }
        }

        $restoran = new Restoran();  // Membuat objek dari kelas Restoran
        $restoran->setMenu("Nasi Goreng");  // Bisa diakses dari luar kelas
        echo "<strong>Menu:</strong> " . $restoran->getMenu();  // Bisa diakses dari luar kelas
        // echo $restoran->namaMenu;  // ERROR: Tidak bisa diakses dari luar kelas karena properti private
        ?>
        <h3>Protected</h3>
        <?php
        class Mesin {
            protected $bahanBakar;  // Properti protected, tidak bisa diakses dari luar kelas, hanya bisa diakses oleh kelas turunan

            protected function jenisBahanBakar() {
                // Metode protected, tidak bisa diakses dari luar kelas, hanya bisa diakses oleh kelas turunan
                return $this->bahanBakar;
            }
        }

        class MesinCuci extends Mesin {
            public function setBahanBakar($bahanBakar) {
                // Metode public, bisa diakses dari luar kelas
                $this->bahanBakar = $bahanBakar;
            }

            public function tampilBahanBakar() {
                // Metode public, bisa diakses dari luar kelas
                return "Mesin cuci menggunakan: " . $this->jenisBahanBakar();
            }
        }

        $mesinCuci = new MesinCuci();  // Membuat objek dari kelas MesinCuci
        $mesinCuci->setBahanBakar("Listrik");  // Bisa diakses dari luar kelas
        echo "<strong>Bahan Bakar Mesin Cuci:</strong> " . $mesinCuci->tampilBahanBakar();  // Bisa diakses dari luar kelas
        // echo $mesinCuci->bahanBakar;  // ERROR: Tidak bisa diakses dari luar kelas karena properti protected
        // echo $mesinCuci->jenisBahanBakar();  // ERROR: Tidak bisa diakses dari luar kelas karena metode protected
        ?>
    </div>
</body>
</html>
