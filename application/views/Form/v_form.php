<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Validasi</title>
</head>
<body>
    <h2>Membuat Form Validasi</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('form/aksi'); ?>
        <label>Nama</label>
        <input type="text" name="nama"></br>
        <label>Email</label>
        <input type="text" name="email"></br>
        <label>Konfirmasi Email</label>
        <input type="text" name="konfir_email"></br>
        <input type="submit" value="Simpan">
</body>
</html>