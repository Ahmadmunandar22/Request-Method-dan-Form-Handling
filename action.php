<?php

if (isset($_POST["submit"])){
   $kode = $_POST["kode"];
   $nama = $_POST["nama"];
   $kategori = $_POST["kategori"];
   $merk = $_POST["merk"];
   $stok = $_POST["stok"];
   $beli = $_POST["beli"];
   $jual = $_POST["jual"];
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>action php</title>

        <!--memangggil bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!--bootstrap icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!--custom css-->
        <link rel="stylesheet" href="style.css">
     
    </head>

    <body>

        <div id="form" class="pt-5">

            <div class="container">

                <div class="row d-flex justify-content-center">

                    <div class="col col-8">
                         <h4>Kode Barang = <?= $kode ?></h4>
                         <h4>Nama Barang  = <?= $nama ?></h4>
                         <h4>Kategori Barang= <?= $kategori ?></h4>
                         <h4>Merk Barang = <?= $merk ?></h4>
                         <h4>Jumlah Stok Barang = <?= $stok ?></h4>
                         <h4>Harga Beli = <?= $beli ?></h4>
                         <h4>Harga Jual = <?= $jual ?></h4>

                    </div>

                </div>

            </div>

        </div>
            
    </body>

</html>