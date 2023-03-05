<?php
// di php untuk membuat variable ada 2 cara yaitu $ diikuti nama variabel, di php varible dibagi 2 yaitu varible sistem dan variable user. untuk membuat komentar bisa pakai //, jika lebih dari 1 garis bisa pakai /* */, atau ctrl+/

/* Variable sistem
    variable yang udah ada di php dan tinggal pakai
*/

    echo $_SERVER["DOCUMENT_ROOT"] ; // untuk mengetahui dimana file disimpan

// untuk membuat garis baru di php menggunakan echo "<br>"
    echo "<br><br>";



/* Variable User
    Variable yang dibuat oleh user
*/



    $name = "Putri" ;
    $age = 15;
    $weight = 50;

    $name = "Jay";

    echo "Nama saya adalah " .$name ;


/* Variable konstan
    variable yang tidak bisa diubah nilainya
	1. Menggunakan define | define('fruit', "Apel");
	2. Menggunakan const  | const fruit = "Apel";
*/

    echo "<br><br>";

    define("SITE_NAME", "Elena");
    echo SITE_NAME;


?>