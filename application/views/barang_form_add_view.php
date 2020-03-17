<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Demo Menambah Baris Data</h2>
    <form action="" method="POST">
    <?php echo $model->label['kode']; ?> <br/>
    <input type="text" name="kode" size="10" /> <br/><br/>
    <?php echo $model->label['nama']; ?> <br/>
    <input type="text" name="nama" size="30" /> <br/><br/>
    <?php echo $model->label['harga']; ?> <br/>
    <input type="text" name="harga" size="20" /> <br/><br/>
    <?php echo $model->label['stok']; ?> <br/>
    <input type="text" name="stok" size="20" /> <br/><br/>
    <input type="submit" name="btnSubmit" value="Kirim" />
    </form>
</body>
</html>