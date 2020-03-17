
<h2><?php echo $title; ?></h2> 
<?php echo validation_errors(); ?> 
<?php echo form_open('crelawan/create'); ?>     
    
    <table>
    <tr>
            <td><label for="id">Id</label></td> 
            <td><input type="input" name="id" size="30" readonly /></td> 
        </tr> 
        <tr>
            <td><label for="nim">Nim</label></td> 
            <td><input type="input" name="nim" size="30" /></td> 
        </tr>
        <tr>
            <td><label for="nama">Nama</label></td> 
            <td><input type="input" name="nama" size="30" /></td> 
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td> 
            <td><input type="input" name="alamat" size="30" /></td> 
        </tr>
        <tr>
            <td><label for="notelp">NoTelp</label></td> 
            <td><input type="input" name="notelp" size="30" /></td> 
        </tr>
        <tr>
            <td><label for="kdwil">Kode Wilayah</label></td> 
            <td><input type="input" name="kdwil" size="30" /></td> 
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Kirim" /></td>
        </tr>
</form>