<?php 

include "animal.php";

echo "<hr>";
echo "Animal";
echo "<hr>";
echo "<hr>";

$kucing = new Kucing;
$kucing->nama = "Momo";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "Tidak";
$kucing->suara = "Meooong";

echo $kucing->Nama();
echo "<br>";
echo $kucing->jumlahKaki();
echo "<br>";
echo $kucing->bisaTerbang();
echo "<br>";
echo $kucing->Suara();
echo "<br>";

echo "<hr>";

$anjing = new Anjing;
$anjing->nama = "Doggo";
$anjing->jumlah_kaki = "4";
$anjing->bisa_terbang = "Tidak";
$anjing->suara = "GuukGuuk";

echo $anjing->Nama();
echo "<br>";
echo $anjing->jumlahKaki();
echo "<br>";
echo $anjing->bisaTerbang();
echo "<br>";
echo $anjing->Suara();
echo "<br>";

echo "<hr>";

$elang = new Elang;
$elang->nama = "Zya";
$elang->jumlah_kaki = "2";
$elang->bisa_terbang = "Bisa";
$elang->suara = "Miiipppp";

echo $elang->Nama();
echo "<br>";
echo $elang->jumlahKaki();
echo "<br>";
echo $elang->bisaTerbang();
echo "<br>";
echo $elang->Suara();
echo "<br>";

echo "<hr>";

$angsa = new Angsa;
$angsa->nama = "Masha";
$angsa->jumlah_kaki = "2";
$angsa->bisa_terbang = "Bisa";
$angsa->suara = "Kwaaak";

echo $angsa->Nama();
echo "<br>";
echo $angsa->jumlahKaki();
echo "<br>";
echo $angsa->bisaTerbang();
echo "<br>";
echo $angsa->Suara();
echo "<br>";

echo "<hr>"; 