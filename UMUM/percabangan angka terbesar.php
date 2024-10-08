<?php
$angka1=8;
$angka2=20;
$angka3=50;

$terbesar=$angka1;

if ($angka1>$terbesar)
{
$terbesar=$angka1;
} 
else if ($angka2>$terbesar)
{
$terbesar=$angka2;
}
else
$terbesar=$angka3;


echo "bilangan terbesar adalah =". $terbesar;
