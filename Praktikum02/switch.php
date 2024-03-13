<?php

$grade = "A";

$keterangan = "";

switch ($grade) {
    case "A";
        $keterangan = "Sangat memuaskan";
    case "B";
         $keterangan = "Memuaskan";
         break;
    case "C";
         $keterangan = "kurang memuaskan";
         break;
    case "D";
        $keterangan ="Tidak memuaskan";
        break;
    default;
    $keterangan = "Tidak lulus";
    break;
}

echo "<h1>$keterangan</h1>";