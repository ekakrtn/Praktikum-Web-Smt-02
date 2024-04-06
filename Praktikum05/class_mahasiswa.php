<?php

class Mahasiswa 
{
    public $namamahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namamahasiswa, $nim, $domisili, $prodi, $ipk )
    {
        $this->$domisili = $domisili;
        $this->$prodi = $prodi;
        $this->$ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "cumlaude";
        } else {
            echo "You did a great job!";
        }
    }
}
$mahasiswa = new Mahasiswa("Eka Kartini", "0110223054", "Bogor", "TI", "3,75");
echo "Nama Lengkap :" . $mahasiswa->namamahasiswa;
echo "<br>";
echo "NIM : "  . $mahasiswa->nim;
echo "<br>";
echo "Domisili :" . $mahasiswa->domisili;
echo "<br>";
echo "prodi : " . $mahasiswa->prodi;
echo "<br>";
echo "IPK :" . $mahasiswa->ipk;
echo "<br>";
$mahasiswa->setPredikatIPK($mahasiswa->ipk);