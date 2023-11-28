<?php
// Nama : Yanto Pernando Halomoan Hutapea
// NIM : 121140127
// RB

class Orang {    // Membuat kelas parent
    private $Nama; //properti
    
    public function setNama($Nama) {  // Setter untuk Nama dengan validasi menggunakan regular expression
        $regex = "/^[a-zA-Z\s]+$/";
        if (!preg_match($regex, $Nama)) {
            throw new Exception("Inputan tidak boleh menggunakan simbol");
        }
        $this->Nama = $Nama;
    }
    
    public function getNama() {    //getter untuk nama
        return $this->Nama;
    }
}

class Identitas extends Orang { //kelas turunan
    //properti
    private $umur;
    private $alamat;
    private $pekerjaan;
    
    public function __construct($nama, $umur, $alamat, $pekerjaan) { //konstruktor untuk inisialisasi objek identitas
        parent::setNama($nama);    //menggunakan setter dari kelas parent
        $this->umur = $umur;
        $this->alamat = $alamat;
        $this->pekerjaan = $pekerjaan;
    }
    
    public function setUmur($umur) { //setter untuk umur
        $this->umur = $umur;
    }
    
    public function getUmur() {    //getter untuk umur
        return $this->umur;
    }
    
    public function setAlamat($alamat) {    //setter untuk alamat
        $this->alamat = $alamat;
    }
    
    public function getAlamat() {    //getter untuk alamat
        return $this->alamat;
    }
    
    public function setPekerjaan($pekerjaan) {    //setter untuk pekerjaan
        $this->pekerjaan = $pekerjaan;
    }
    
    public function getPekerjaan() {    //getter untuk pekerjaan
        return $this->pekerjaan;
    }
    
    public function displayInfo() {    //fungsi untuk menampilkan informasi
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Umur: " . $this->getUmur() . "<br>";
        echo "Alamat: " . $this->getAlamat() . "<br>";
        echo "Pekerjaan: " . $this->getPekerjaan() . "<br>";
    }
}

//membuat objek identitas
$Orang1 = new Identitas("Yanto Pernando Halomoan", 20, "Belwis", "Mahasiswa");

echo "data lama:<br>";
$Orang1->displayInfo();    //menampilkan data dari objek

$Orang1->setPekerjaan("Programmer");    //mengubah pekerjaan dan menampilkan info terbaru
echo "<br>info terbaru:<br>";
$Orang1->displayInfo();

//percobaan mengubah nama dengan inputan tidak valid
try {
    $Orang1->setNama("yantohutapea1187@gmail.com");
    $Orang1->displayInfo();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
