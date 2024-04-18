<?php

require "index.php";

// $Sudana["jumlah_hobi"] = count($Sudana["Hobi"]);

// echo count($Sudana);
// var_dump($Sudana);
// if ($Sudana['umur'] >= 25 ) {
//      echo $Sudana['pekerjaan'] . PHP_EOL;
// } elseif ($Sudana['umur'] <= 7) {
//     echo $Sudana['Hobi'][0] .PHP_EOL;
//     echo $Sudana['Hobi'][1] .PHP_EOL;
//     echo $Sudana['Hobi'][2] .PHP_EOL;
// } else {
//     echo $Sudana['Pendidikan'];
// }

// switch ($Sudana['nilai']) {
//     case 'A':
//     case 'B':
//         echo "Baik";
//         break;
//     case 'C':
//         echo "Cukup";
//         break;
//     case 'D';
//         echo "Kurang";
//         break;

//     default:
//     echo "Tidak Lulus";
//     break;
// }
// for ($i = 0; $i < count($Sudana['Hobi']); $i++) {
//     echo $Sudana['Hobi'][$i] . PHP_EOL;
// }

// $d = [
//     'katak', 'kodok', 'laptop', 'lele', 'ikan', 
//     'sate', 'tidur', 'pulang'
// ];
// for ($i = 0; $i < count ($d);$i++) {
//     echo $d[$i].PHP_EOL;
// }

foreach ($Sudana as $key => $value) {
    if ($key == "Hobi") {
        echo "Hobi:" . PHP_EOL;
        $a = 1;
        foreach ($value as $hobi) {
            echo $a . ". " . $hobi . PHP_EOL;
            $a++;
        }
    } else {
        echo $key . ':' . $value . PHP_EOL;
    }
}







