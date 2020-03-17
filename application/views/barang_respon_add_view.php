<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Menambah Baris Data</title>
</head>
<body>
    <h2>Demo Menambah Baris Data</h2>
    <p>Data berikut telah ditambahkan kedalam tabel barang</p>

    Kode : <?php echo $model->kode ?><br/>
    Nama : <?php echo $model->nama ?><br/>
    Harga : <?php echo $model->harga ?><br/>
    Stok : <?php echo $model->stok ?><br/>

    <a href="<?php echo site_url('barang/index'); ?>"> Home ah </a>  
</body>
</html>