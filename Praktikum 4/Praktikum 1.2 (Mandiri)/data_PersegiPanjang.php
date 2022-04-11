<?php
    require_once "class_PersegiPanjang.php";
    $PersegiPanjang1 = new PersegiPanjang( 10,5 );
    $PersegiPanjang2 = new PersegiPanjang( 8, 5 );
    echo "<br/>Luas Persegi Panjang I ".$PersegiPanjang1->getLuas();
    echo "<br>Luas Persegi Panjang II ".$PersegiPanjang2->getLuas();
    echo "<br>Keliling Persegi Panjang I ".$PersegiPanjang1->getKeliling();
    echo "<br>Keliling Persegi Panjang II ".$PersegiPanjang2->getKeliling();
?>
