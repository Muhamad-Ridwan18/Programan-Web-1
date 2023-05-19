<?php

    $angka_awal = 10;

    function cek_ganjil_genap($angka){
        if($angka % 2 == 0){
            return "genap";
        }else{
            return "ganjil";
        }
    }
    
    $result = cek_ganjil_genap($angka_awal);
    echo "Angka awal: $angka_awal\n";
    echo "Angka tersebut adalah: $result";
?>