<?php
$islem=$_POST["islem"];
 $sayi1=$_POST["sayi1"];
 $sayi2=$_POST["sayi2"];
 if($islem=="+")
     $sonuc=$sayi1+$sayi2;
 else if($islem=="-")
    $sonuc=$sayi1-$sayi2;
 else if($islem=="*")
    $sonuc=$sayi1*$sayi2;
 else
 {
    $sonuc=$sayi1/$sayi2;
 }
 echo $sonuc;
?>