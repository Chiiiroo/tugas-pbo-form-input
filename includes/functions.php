<?php
// Class untuk menampung data Mahasiswa (Nilai Tambah PBO)
class Mahasiswa {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    public function __construct($f, $l, $p, $a) {
        $this->firstname = htmlspecialchars($f);
        $this->lastname = htmlspecialchars($l);
        $this->phone = htmlspecialchars($p);
        $this->address = htmlspecialchars($a);
    }

    public function tampilkanData() {
        return "
            <div class='result-display'>
                Hi, my name is {$this->firstname} {$this->lastname}<br>
                Phone Number : {$this->phone}<br>
                Address : {$this->address}<br>
                <a href=''>Reset</a>
            </div>";
    }
}

// Eksekusi saat tombol submit diklik
if (isset($_POST['submit'])) {
    // Membuat Object dari Class Mahasiswa
    $user = new Mahasiswa($_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['address']);
    echo $user->tampilkanData();
}
?>