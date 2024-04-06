<?php

class Kendaraan 
{
    public $nama;
    public $Warna;
    public $tempatoperasi;

    function __construct($nama, $warna, $tempatoperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatoperasi = $tempatoperasi;
    }
}

$kendaraan = new kendaraan("Mobil", "Merah", "Darat");
echo $kendaraan->nama;
echo "<br>";
echo $kendaraan->warna;
echo "<br>";
echo $kendaraan->tempatoperasi;
