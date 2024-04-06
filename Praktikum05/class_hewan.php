<?php

class HewanMamalia 
{
    public $warna;
    public $NamaHewan;
    public $habitat;
    function makan()
    {
        return "Mamalia makan";
    }

    function minum()
    {
        return "Mamalia minum";
    }

    function menyusui()
    {
        return "mamalia menyusui";
    }
}

$mamalia  = new  HewanMamalia();
$mamalia->namahewan = "lumba-lumba";
echo $mamalia->namahewan;
echo "<br>";
echo $mamalia->warna = "Abu-abu";
echo "<br>"; 
echo $mamalia->habitat = "Laut";
echo "<br>";
 echo $mamalia->makan();
 echo "<br>";
 echo $mamalia->minum();
 echo "<br>";
 echo $mamalia->menyusui();
