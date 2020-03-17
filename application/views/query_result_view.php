<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Metode Result</title>
</head>
<body>
    <h2>Demo Metode Result</h2>
    <p>Data yang terdapat pada tabel barang</p>

    <table border="1">
        <tr>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        </tr>
        <?php
        foreach ($query->result() as $row){
            ?>
            <tr>
                <td><?php echo $row->kode; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->harga; ?></td>
                <td><?php echo $row->stok; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>