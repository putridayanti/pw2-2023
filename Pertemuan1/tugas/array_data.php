<?php
  $m_fruits = [
    ["ID" => 1, "Nama" => "Melon", "Warna" => "Hijau", "Stok" => "50 Kg" , "Harga" => "65.000/Kg" , "Deskripsi" =>   "Kandungan gizi melon termasuk yang paling beragam bila dibandingkan dengan buah-buahan sejenisnya. Buah berdaging lembut ini juga tinggi kandungan air. Bahkan, hampir 90% dari daging buah melon adalah air." ] ,
    ["ID" => 2, "Nama" => "Jeruk", "Warna" => "Orange", "Stok" => "55 Kg" , "Harga" => "30.000/Kg" , "Deskripsi" => "Buah jeruk dikenal sebagai sumber makanan terbesar yang kaya akan vitamin C."] ,
    ["ID" => 3, "Nama" => "Apel", "Warna" => "Merah", "Stok" => "53 Kg" , "Harga" => "55.000/Kg" , "Deskripsi" => "Buah apel diketahui rendah kalori serta mengandung beragam vitamin dan mineral, seperti vitamin A, vitamin B6, vitamin C, dan kalium."] ,
    ["ID" => 4, "Nama" => "Anggur", "Warna" => "Ungu", "Stok" => "45 Kg" , "Harga" => "68.000/Kg" , "Deskripsi" => "Dalam 1 buah anggur, setidaknya terkandung seperempat dari kebutuhan vitamin C harian, 29 persen vitamin K, dan 10 persen tembaga."]
  ] ;

  
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover" border = "1px"> 
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th width="450px">Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($m_fruits as $fruit) {
            echo '<tr>' ;
            echo '<td>'. $fruit["ID"] .'</td>';
            echo '<td>' . $fruit["Nama"] . '</td>' ;
            echo '<td>' . $fruit["Warna"] . '</td>' ;
            echo '<td>' . $fruit["Stok"] . '</td>' ;
            echo '<td>' . $fruit["Harga"] . '</td>' ;
            echo '<td>' . $fruit["Deskripsi"] . '</td>' ;
            echo '</tr>';        
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>